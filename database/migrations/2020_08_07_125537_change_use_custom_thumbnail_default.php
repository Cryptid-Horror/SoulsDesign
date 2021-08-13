<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUseCustomThumbnailDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->boolean('use_custom_thumb')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('character_images', function (Blueprint $table) {
            $table->boolean('use_custom_thumb')->default(1)->change();
        });
    }
}
