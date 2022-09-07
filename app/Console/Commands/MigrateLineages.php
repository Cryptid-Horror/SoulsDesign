<?php

namespace App\Console\Commands;

use App\Models\Character\Character;
use DB;
use Illuminate\Console\Command;

class MigrateLineages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate-lineages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrates lineage information to the table given by the Character Lineages extension.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('********************');
        $this->info('* MIGRATE LINEAGES *');
        $this->info('********************'."\n");

        $this->line("Migrating lineages...\n");

        // Get all Characters
        $characters = Character::all();

        foreach ($characters as $char) {
            $data = ['character_id' => $char->id];

            $c = $char->lineage_old();

            // Sire
            if ($c['sire']) {
                if ($id = $this->checkSlug($c['sire'])) {
                    $data['sire_id'] = $id;
                } else {
                    $data['sire_name'] = $c['sire'];
                }
            } else {
                $data['sire_id'] = null;
            }

            // Sire Sire
            if ($c['ss']) {
                if ($id = $this->checkSlug($c['ss'])) {
                    $data['sire_sire_id'] = $id;
                } else {
                    $data['sire_sire_name'] = $c['ss'];
                }
            } else {
                $data['sire_sire_id'] = null;
            }

            // Sire Sire Sire
            if ($c['sss']) {
                if ($id = $this->checkSlug($c['sss'])) {
                    $data['sire_sire_sire_id'] = $id;
                } else {
                    $data['sire_sire_sire_name'] = $c['sss'];
                }
            } else {
                $data['sire_sire_sire_id'] = null;
            }

            // Sire Sire Dam
            if ($c['ssd']) {
                if ($id = $this->checkSlug($c['ssd'])) {
                    $data['sire_sire_dam_id'] = $id;
                } else {
                    $data['sire_sire_dam_name'] = $c['ssd'];
                }
            } else {
                $data['sire_sire_dam_id'] = null;
            }

            // Sire Dam
            if ($c['sd']) {
                if ($id = $this->checkSlug($c['sd'])) {
                    $data['sire_dam_id'] = $id;
                } else {
                    $data['sire_dam_name'] = $c['sd'];
                }
            } else {
                $data['sire_dam_id'] = null;
            }

            // Sire Dam Sire
            if ($c['sds']) {
                if ($id = $this->checkSlug($c['sds'])) {
                    $data['sire_dam_sire_id'] = $id;
                } else {
                    $data['sire_dam_sire_name'] = $c['sds'];
                }
            } else {
                $data['sire_dam_sire_id'] = null;
            }

            // Sire Dam Dam
            if ($c['sdd']) {
                if ($id = $this->checkSlug($c['sdd'])) {
                    $data['sire_dam_dam_id'] = $id;
                } else {
                    $data['sire_dam_dam_name'] = $c['sdd'];
                }
            } else {
                $data['sire_dam_dam_id'] = null;
            }

            // Dam
            if ($c['dam']) {
                if ($id = $this->checkSlug($c['dam'])) {
                    $data['dam_id'] = $id;
                } else {
                    $data['dam_name'] = $c['dam'];
                }
            } else {
                $data['dam_id'] = null;
            }

            // Dam Sire
            if ($c['ds']) {
                if ($id = $this->checkSlug($c['ds'])) {
                    $data['dam_sire_id'] = $id;
                } else {
                    $data['dam_sire_name'] = $c['ds'];
                }
            } else {
                $data['dam_sire_id'] = null;
            }

            // Dam Sire Sire
            if ($c['dss']) {
                if ($id = $this->checkSlug($c['dss'])) {
                    $data['dam_sire_sire_id'] = $id;
                } else {
                    $data['dam_sire_sire_name'] = $c['dss'];
                }
            } else {
                $data['dam_sire_sire_id'] = null;
            }

            // Dam Sire Dam
            if ($c['dsd']) {
                if ($id = $this->checkSlug($c['dsd'])) {
                    $data['dam_sire_dam_id'] = $id;
                } else {
                    $data['dam_sire_dam_name'] = $c['dsd'];
                }
            } else {
                $data['dam_sire_dam_id'] = null;
            }

            // Dam Dam
            if ($c['dd']) {
                if ($id = $this->checkSlug($c['dd'])) {
                    $data['dam_dam_id'] = $id;
                } else {
                    $data['dam_dam_name'] = $c['dd'];
                }
            } else {
                $data['dam_dam_id'] = null;
            }

            // Dam Dam Sire
            if ($c['dds']) {
                if ($id = $this->checkSlug($c['dds'])) {
                    $data['dam_dam_sire_id'] = $id;
                } else {
                    $data['dam_dam_sire_name'] = $c['dds'];
                }
            } else {
                $data['dam_dam_sire_id'] = null;
            }

            // Dam Dam Dam
            if ($c['ddd']) {
                if ($id = $this->checkSlug($c['ddd'])) {
                    $data['dam_dam_dam_id'] = $id;
                } else {
                    $data['dam_dam_dam_name'] = $c['ddd'];
                }
            } else {
                $data['dam_dam_dam_id'] = null;
            }

            DB::table('character_lineages')->insert($data);
        }

        $this->line("\nLineages migrated!");
    }

    private function checkSlug($slug)
    {
        if (isset($slug->id)) {
            return $slug->id;
        } else {
        }
    }
}
