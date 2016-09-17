<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 17-09-2016
 * Time: 18:29
 */

namespace Confee\Domains\Users\Database\Factories;


use Confee\Domains\Users\User;
use Confee\Support\Database\ModelFactory;

class UserFactory extends ModelFactory
{
    protected $model = User::class;

    protected function fields()
    {
        static $password;

        return  [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}