<?php

use think\migration\Seeder;

class User extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create('zh_CN');  //选择中文
        $data = [];
        for ($i = 0; $i < 5; $i++){
            $data[$i]['username'] = $faker->name();
            $data[$i]['phone'] = $faker->phoneNumber();
            $data[$i]['email'] = $faker->email();
        }
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}