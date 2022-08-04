<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUseCustomThumbnailDefault extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->boolean('use_custom_thumb')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->boolean('use_custom_thumb')->default(1)->change();
        });
    }
}
