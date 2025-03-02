<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFocusCharaColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        //
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('focus_chara_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
}
