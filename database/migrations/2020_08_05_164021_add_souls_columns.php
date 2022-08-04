<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoulsColumns extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->string('title_name', 191)->nullable()->default(null);
            $table->string('nicknames', 512)->nullable()->default(null);
            $table->boolean('is_adopted')->nullable(false)->default(false);
            $table->string('health_status', 191)->nullable()->default('Healthy');
            $table->char('sex', 1)->nullable()->default(null);
            $table->string('gender_pronouns', 191)->nullable()->default(null);
            $table->string('temperament', 32)->nullable()->default('Timid');
            $table->string('diet', 32)->nullable()->default(null);
            $table->string('skills', 1024)->nullable()->default(null);
            $table->string('rank', 32)->nullable()->default('Fledgling');
            $table->tinyInteger('slots_used')->nullable(false)->default(0);

            $table->boolean('ouroboros')->nullable(false)->default(false);
            $table->string('taming', 32)->nullable()->default(null);
            $table->boolean('basic_aether')->nullable(false)->default(false);
            $table->string('low_aether', 32)->nullable()->default(null);
            $table->string('high_aether', 32)->nullable()->default(null);
            $table->string('soul_link_type', 32)->nullable()->default(null);
            $table->string('soul_link_target', 191)->nullable()->default(null);
            $table->string('soul_link_target_link', 200)->nullable()->default(null);
            $table->string('arena_ranking', 191)->nullable()->default(null);

            // Lineage
            $table->string('sire_slug', 191)->nullable()->default(null);
            $table->string('dam_slug', 191)->nullable()->default(null);

            $table->string('ss_slug', 191)->nullable()->default(null);
            $table->string('sd_slug', 191)->nullable()->default(null);

            $table->string('ds_slug', 191)->nullable()->default(null);
            $table->string('dd_slug', 191)->nullable()->default(null);

            $table->string('sss_slug', 191)->nullable()->default(null);
            $table->string('ssd_slug', 191)->nullable()->default(null);

            $table->string('sds_slug', 191)->nullable()->default(null);
            $table->string('sdd_slug', 191)->nullable()->default(null);

            $table->string('dss_slug', 191)->nullable()->default(null);
            $table->string('dsd_slug', 191)->nullable()->default(null);

            $table->string('dds_slug', 191)->nullable()->default(null);
            $table->string('ddd_slug', 191)->nullable()->default(null);

            $table->boolean('use_custom_lineage')->nullable(false)->default(false);

            $table->boolean('deceased')->default(false);
            $table->timestamp('deceased_at')->nullable();
        });

        Schema::table('character_images', function (Blueprint $table) {
            $table->string('genotype', 191)->nullable()->default(null);
            $table->string('phenotype', 191)->nullable()->default(null);
            $table->string('free_markings', 191)->nullable()->default(null);
            $table->string('adornments', 1024)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('title_name');
            $table->dropColumn('nicknames');
            $table->dropColumn('is_adopted');
            $table->dropColumn('health_status');
            $table->dropColumn('sex');
            $table->dropColumn('gender_pronouns');
            $table->dropColumn('temperament');
            $table->dropColumn('diet');
            $table->dropColumn('skills');
            $table->dropColumn('rank');
            $table->dropColumn('slots_used');

            $table->dropColumn('ouroboros');
            $table->dropColumn('taming');
            $table->dropColumn('basic_aether');
            $table->dropColumn('low_aether');
            $table->dropColumn('high_aether');
            $table->dropColumn('soul_link_type');
            $table->dropColumn('soul_link_target');
            $table->dropColumn('soul_link_target_link');
            $table->dropColumn('arena_ranking');

            // Lineage
            $table->dropColumn('sire_slug');
            $table->dropColumn('dam_slug');

            $table->dropColumn('ss_slug');
            $table->dropColumn('sd_slug');

            $table->dropColumn('ds_slug');
            $table->dropColumn('dd_slug');

            $table->dropColumn('sss_slug');
            $table->dropColumn('ssd_slug');

            $table->dropColumn('sds_slug');
            $table->dropColumn('sdd_slug');

            $table->dropColumn('dss_slug');
            $table->dropColumn('dsd_slug');

            $table->dropColumn('dds_slug');
            $table->dropColumn('ddd_slug');

            $table->dropColumn('use_custom_lineage');

            $table->dropColumn('deceased');
            $table->dropColumn('deceased_at');
        });

        Schema::table('character_images', function (Blueprint $table) {
            $table->dropColumn('genotype');
            $table->dropColumn('phenotype');
            $table->dropColumn('free_markings');
            $table->dropColumn('adornments');
        });
    }
}
