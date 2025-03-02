<?php

namespace App\Console\Commands;

use App\Models\Character\Character;
use App\Models\Prompt\Prompt;
use App\Models\User\User;
use Illuminate\Console\Command;

class AddLevels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add-levels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a level row for each existing user and character.';

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
        $this->info('******************');
        $this->info('* ADD LEVEL INFO *');
        $this->info('******************'."\n");

        $this->line("Adding levels...\n");
        $this->line('Migrating users...');
        /** ADD LEVELS */
        $users = User::all();
        foreach ($users as $user) {
            if (!$user->level) {
                $user->level()->create([
                    'user_id' => $user->id,
                ]);
            }
        }
        $this->line("Migrated users\n");
        $this->line('Migrating characters...');

        $characters = Character::all();
        foreach ($characters as $character) {
            if (!$character->level) {
                $character->level()->create([
                    'character_id' => $character->id,
                ]);
            }
        }
        $this->line("Migrated characters\n");
        $this->line('Successfully added levels!');

        $this->line('Migrating prompts...');
        $prompts = Prompt::all();
        foreach ($prompts as $prompt) {
            if (!$prompt->expreward) {
                $prompt->expreward()->create([
                    'prompt_id' => $prompt->id,
                ]);
            }
        }
        $this->line('Migrated prompts!');
        $this->line('Successfully added prompt exp rewards!');
    }
}
