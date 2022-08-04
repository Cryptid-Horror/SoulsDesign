<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtImageColumnsToDesignUpdates extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->string('ext_url', 200)->nullable();
        });
        DB::statement('ALTER TABLE design_updates CHANGE `use_cropper` `use_custom_thumb` TINYINT(1) DEFAULT 1 NOT NULL;');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->dropColumn('ext_url');
        });
        DB::statement('ALTER TABLE design_updates CHANGE `use_custom_thumb` `use_cropper` TINYINT(1) DEFAULT 1 NOT NULL;');
    }
}
