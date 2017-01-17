<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToUsers extends Migration
{

    public function up()
    {
        Schema::table('posts', function($table){
            $table->string('slug')->unique()->after('body');
        });
    }

    public function down()
    {
        Schema::table('posts',function($table){
            $table->dropColumn('slug');
        });
    }
}
