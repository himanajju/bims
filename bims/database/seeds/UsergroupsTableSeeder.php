<?php

use Illuminate\Database\Seeder;

class UsergroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usergroups')->insert(['id' => 1,
        						'group_title' => 'ADMIN',
        						'create_at' => '2017-07-30 00:00:00',
        						'update_at' => '2017-07-30 00:00:00' 
        							]);
        DB::table('usergroups')->insert(['id' => 2,
        						'group_title' => 'USER',
        						'create_at' => '2017-07-30 00:00:00',
        						'update_at' => '2017-07-30 00:00:00' 
        							]);

    }
}
