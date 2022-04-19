<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->renameColumn('body', 'bodi');
        //     // $table->integer('rangking')->default(0)->nullable()->after('body');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->renameColumn('bodi', 'body');
        //     // $table->dropColumn('rangking');
        // });
    }
}
