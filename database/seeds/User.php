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
        $num = 20;
        $admin = [
            'username' => 'admin',
            'password' => sha1('123456'.config('defaultPasswordSalt')),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email()
        ];
        for ($i = 0; $i < $num; $i++){
            $data[$i]['username'] = $faker->name();
            $data[$i]['phone'] = $faker->phoneNumber();
            $data[$i]['password'] = sha1('123456'.config('defaultPasswordSalt'));
            $data[$i]['email'] = $faker->email();
        }
        array_push($data,$admin);
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}