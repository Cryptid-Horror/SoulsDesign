<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenoPhenoToDesignUpdates extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->string('genotype', 191)->nullable()->default(null);
            $table->string('phenotype', 191)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->dropColumn('genotype');
            $table->dropColumn('phenotype');
        });
    }
}
