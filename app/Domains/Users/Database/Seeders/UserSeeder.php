<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 17-09-2016
 * Time: 18:37
 */

namespace Confee\Domains\Users\Database\Seeders;


use Confee\Domains\Users\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)
            ->times(30)
            ->create();
    }
}