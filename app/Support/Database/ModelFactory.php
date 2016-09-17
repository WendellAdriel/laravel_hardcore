<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 17-09-2016
 * Time: 18:05
 */

namespace Confee\Support\Database;


use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;

abstract class ModelFactory
{
    /**
     * @var Factory
     */
    protected $factory;
    /**
     * @var Generator
     */
    protected $faker;
    /**
     * @var string
     */
    protected $model;

    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);
    }

    public function define()
    {
        $this->factory->define($this->model, function () {
            return $this->fields();
        });
    }

    /**
     * @return array
     */
    abstract protected function fields();
}