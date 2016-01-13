<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnShowImg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('blogs', function( Blueprint $table) {
        //     $table->string("blog_show_img")->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('blogs', function( $table) {
        //     $table->dropColumn('blog_show_img');
        // });
    }
}
