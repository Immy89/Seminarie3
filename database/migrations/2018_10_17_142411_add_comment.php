<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('comment')->insert(array(
            'userId' => '1',
            'recipeId' => '1',
            'comment' => 'Goda Köttbullar.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '3',
            'recipeId' => '1',
            'comment' => 'Mycket gott, men jag hade föredragit om receptet inkluderade hur man gör mos till.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '2',
            'recipeId' => '1',
            'comment' => 'Supergoda, älskas av hela familjen.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '3',
            'recipeId' => '3',
            'comment' => 'Goda Pannkakor.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '2',
            'recipeId' => '3',
            'comment' => 'Kul med lite variation på pannkakor, på detta sättet får jag lite hälsosammare mat och barnen får sin önskning om pannkakor uppfylld.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '2',
            'recipeId' => '2',
            'comment' => 'Älskas av hela familjen.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '1',
            'recipeId' => '2',
            'comment' => 'Supergoda :)',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('comment')->insert(array(
            'userId' => '3',
            'recipeId' => '2',
            'comment' => 'Mycket omtyckta hemma.',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('comment')->where('commentId', '=', '1')->delete();
        DB::table('comment')->where('commentId', '=', '2')->delete();
        DB::table('comment')->where('commentId', '=', '3')->delete();
        DB::table('comment')->where('commentId', '=', '4')->delete();
        DB::table('comment')->where('commentId', '=', '5')->delete();
        DB::table('comment')->where('commentId', '=', '6')->delete();
        DB::table('comment')->where('commentId', '=', '7')->delete();
        DB::table('comment')->where('commentId', '=', '8')->delete();
    }
}
