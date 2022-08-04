<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtImageColumnsToCharacterImages extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->string('ext_url', 200)->nullable();
            $table->renameColumn('use_cropper', 'use_custom_thumb');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->dropColumn('ext_url');
            $table->renameColumn('use_custom_thumb', 'use_cropper');
        });
    }
}
