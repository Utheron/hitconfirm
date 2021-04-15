<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPagesTableAddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->foreignId('user_id')
            ->after('id')
            ->constrained('users')
            ->onDelete('cascade');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->foreignId('category_id')
            ->after('user_id')
            ->constrained('page_categories')
            ->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'user_id',
                'category_id',
            ]);
        });
    }
}
