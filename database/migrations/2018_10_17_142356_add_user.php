<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user')->insert(array(
            'username' => 'Kim',
            'password' => '1234',
            'email' => 'ksather@kth.se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('user')->insert(array(
            'username' => 'Stina',
            'password' => '1234',
            'email' => 'Stina@gmail.com',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('user')->insert(array(
            'username' => 'Kalle',
            'password' => '1234',
            'email' => 'Kalle@gmail.com',
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
        DB::table('user')->where('name', '=', 'Kim')->delete();
        DB::table('user')->where('name', '=', 'Stina')->delete();
        DB::table('user')->where('name', '=', 'Kalle')->delete();
    }
}
