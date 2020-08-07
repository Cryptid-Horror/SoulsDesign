<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Settings;
use Auth;
use DB;
use Carbon\Carbon;

use App\Models\Submission\Submission;
use App\Models\Character\CharacterDesignUpdate;
use App\Models\Character\CharacterTransfer;
use App\Models\Character\Character;
use App\Models\Character\CharacterCategory;
use App\Models\Feature\Feature;
use App\Models\User\User;
use App\Models\Species\Species;
use App\Models\Species\Subtype;
use App\Models\Trade;
use App\Models\Rarity;

use App\Http\Controllers\Controller;

use App\Services\CharacterManager;

class HomeController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        $openTransfersQueue = Settings::get('open_transfers_queue');
        return view('admin.index', [
            'submissionCount' => Submission::where('status', 'Pending')->whereNotNull('prompt_id')->count(),
            'claimCount' => Submission::where('status', 'Pending')->whereNull('prompt_id')->count(),
            'designCount' => CharacterDesignUpdate::characters()->where('status', 'Pending')->count(),
            'myoCount' => CharacterDesignUpdate::myos()->where('status', 'Pending')->count(),
            'openTransfersQueue' => $openTransfersQueue,
            'transferCount' => $openTransfersQueue ? CharacterTransfer::active()->where('is_approved', 0)->count() : 0,
            'tradeCount' => $openTransfersQueue ? Trade::where('status', 'Pending')->count() : 0
        ]);
    }

    public function uploadCharacterDataFromCSV() {
        $service = new CharacterManager();
        \set_time_limit(500);
        $file_name = public_path('files/souls_imports_for_db.csv');
        $file_handle =fopen($file_name, 'r');
        $headers = fgetcsv($file_handle, 0, ',');
        $row_num = 1;
        while(!feof($file_handle)) {
            $row = fgetcsv($file_handle, 0, ',');
            if($row) {
                for($i = 0; $i < count($headers); $i++) {
                    $import_data[$row_num][$headers[$i]] = $row[$i];
                }
                $row_num++;
            }
        }
        fclose($file_handle);
        foreach($import_data as $character) {
            $result = $character;
            $characterData = [];
            $characterData['owner_alias'] = $character['owner_alias'];
            $characterData['character_category_id'] = CharacterCategory::where('code', $character['character_category'])->first()->id;
            $characterData['number'] = $character['number'];
            $characterData['slug'] = $character['character_category'].'-'.format_masterlist_number($character['number'], 4);
            $characterData['is_visible'] = 1;
            $characterData['is_giftable'] = 1;
            $characterData['is_tradeable'] = 1;
            $characterData['is_sellable'] = 1;
            $characterData['use_custom_thumb'] = 0;

            $designer_aliases = [];
            $designer_urls = [];
            foreach(explode(',', $character['designers']) as $designer) {
                $designer_aliases[] = $designer;
                $designer_urls[] = 'https://www.deviantart.com/'.$designer;
            }
            $characterData['designer_alias'] = $designer_aliases;
            $characterData['designer_url'] = $designer_urls;
            
            $characterData['artist_alias'] = [];
            $characterData['artist_url'] = [];

            $characterData['thumbnail'] = null;
            $characterData['image'] = null;

            $characterData['species_id'] = Species::where('name', $character['species'])->first()->id;
            $characterData['subtype_id'] = Subtype::where('name', $character['subtype'])->first()->id;
            $characterData['rarity_id'] = Rarity::where('name', $character['generation'])->first()->id;

            $feature_ids = [];
            $feature_ids[] = Feature::where('name', $character['coat'])->first()->id;
            $feature_ids[] = Feature::where('name', $character['eyes'])->first()->id;
            $feature_ids[] = Feature::where('name', $character['horns'])->first()->id;
            if($character['subtype'] == 'Ravager') {
                $feature_ids[] = Feature::where('name', $character['ears'])->first()->id;
                $feature_ids[] = Feature::where('name', $character['tail'])->first()->id;
            }
            if($character['mutations']) {
                foreach(explode(',', $character['mutations']) as $mutation) {
                    $feature_ids[] = Feature::where('name', $mutation)->first()->id;
                }
            }
            if($character['breath']) {
                foreach (explode(',', $character['breath']) as $breath) {
                    $feature_ids[] = Feature::where('name', $breath)->first()->id;
                }
            }
            $characterData['feature_id'] = $feature_ids;
            $characterData['feature_data'] = array_fill(0, count($feature_ids), null);

            $characterData['ext_url'] = $character['ext_url'];
            $characterData['image_description'] = $character['image_notes'];
            $characterData['description'] = '';
            $characterData['adornments'] = explode(',', $character['adornments']);
            $characterData['sex'] = $character['sex'];
            $characterData['genotype'] = $character['genotype'];
            $characterData['phenotype'] = $character['phenotype'];
            $characterData['free_markings'] = $character['free_markings'];
            $characterData['health_status'] = $character['health_status'];
            $characterData['ouroboros'] = $character['ouroboros_emblem'];
            $characterData['taming'] = $character['taming'];
            $characterData['basic_aether'] = $character['basic_aether'];
            $characterData['low_aether'] = $character['low_magic'];
            $characterData['high_aether'] = $character['high_magic'];
            $characterData['arena_ranking'] = $character['arena_ranking'];
            $characterData['soul_link_type'] = $character['soul_link_type'];
            $characterData['soul_link_target'] = $character['soul_link_target'];
            $characterData['soul_link_target_link'] = $character['soul_link_target_link'];
            $characterData['temperament'] = $character['temperament'];
            $characterData['diet'] = $character['diet'];
            $characterData['rank'] = $character['rank'];
            $characterData['skills'] = explode(',', $character['skills']);

            $characterData['use_custom_lineage'] = $character['use_custom_lineage'] == 'TRUE' ? 1 : 0;
            $characterData['sire_slug'] = $character['sire'] ?? null;
            $characterData['dam_slug'] = $character['dam'] ?? null;

            if($characterData['use_custom_lineage']) {
                $characterData['ss_slug'] = $character['ss'];
                $characterData['sd_slug'] = $character['sd'];
                $characterData['ds_slug'] = $character['ds'];
                $characterData['dd_slug'] = $character['dd'];

                $characterData['sss_slug'] = $character['sss'];
                $characterData['ssd_slug'] = $character['ssd'];
                $characterData['sds_slug'] = $character['sds'];
                $characterData['sdd_slug'] = $character['sdd'];

                $characterData['dss_slug'] = $character['dss'];
                $characterData['dsd_slug'] = $character['dsd'];
                $characterData['dds_slug'] = $character['dds'];
                $characterData['ddd_slug'] = $character['ddd'];
            }

            $characterData['name'] = $character['name'];
            $characterData['title_name'] = $character['title_name'];
            $characterData['nicknames'] = $character['nicknames'];

            if ($c = $service->createCharacter($characterData, Auth::user())) {
            }
            else {
                dd($service->errors()->getMessages()['error']);
            }
            
            // Add previous owners
            foreach(explode(',', $character['previous_owner']) as $p) {
                $p = explode(';', $p);
                $name = $p[0];
                $time = isset($p[1]) ? Carbon::parse($p[1]) : Carbon::now()->subYear();
                DB::table('user_character_log')->insert(
                    [
                        'sender_id' => 1,
                        'recipient_alias' => $p[0],
                        'character_id' => $c->id,
                        'log' => 'Imported from dA',
                        'log_type' => 'Character Imported',
                        'data' => 'Initial Import', 
                        'created_at' => $time,
                        'updated_at' => $time
                    ]
                );
            }

            // Add profile
            $c->profile->text = $character['personality'];
            $c->profile->parsed_text = parse($character['personality']);
            $c->profile->save();
        }
        return 'done';
    }
}
