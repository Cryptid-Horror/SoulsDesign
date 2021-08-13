<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenoPhenoToDesignUpdates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
     *
     * @return void
     */
    public function down()
    {
        Schema::table('design_updates', function (Blueprint $table) {
            $table->dropColumn('genotype');
            $table->dropColumn('phenotype');
        });
    }
}
