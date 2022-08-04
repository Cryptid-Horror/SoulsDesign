<?php

namespace App\Console\Commands;

use App\Models\Character\Character;
use App\Models\Character\CharacterItem;
use App\Models\Item\Item;
use App\Models\Item\ItemCategory;
use App\Models\User\User;
use App\Services\InventoryManager;
use Illuminate\Console\Command;

class MoveBoxesFromDragonsToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'move-bugged-boxes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Transfers ALL Character Items under the "Boxes" Item Category to the User that owns the Character.';

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
        $this->info('*********************');
        $this->info('* MOVE BUGGED BOXES *');
        $this->info('*********************'."\n");

        $this->line("Moving bugged boxes from dragon to user...\n");

        // Get all Character Items
        $character_items = CharacterItem::all();

        foreach ($character_items as $ci) {
            // Check the item's category
            if (!$ci->count) {
                continue;
            }

            $item = Item::find($ci->item_id);
            if (!$item) {
                continue;
            }

            $item_category = ItemCategory::find($item->item_category_id);
            if (!$item_category || $item_category->name != 'Boxes') {
                continue;
            }

            $character = Character::find($ci->character_id);
            $owner = User::find($character->user_id);

            // Create service
            $service = new InventoryManager();

            // Credit the item to User
            $service->creditItem($character, $owner, 'Character → User Transfer (Staff Initiated)', $ci->data, $ci->item, $ci->count);

            // Debit the character's items
            $ci->count = 0;
            $ci->save();
        }

        $this->line("\nAll boxes moved!");
    }
}
