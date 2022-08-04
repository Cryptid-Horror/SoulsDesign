<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFreeAdornToDesignUpdates extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->string('free_markings', 191)->nullable()->default(null);
            $table->string('adornments', 1024)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->dropColumn('free_markings');
            $table->dropColumn('adornments');
        });
    }
}
