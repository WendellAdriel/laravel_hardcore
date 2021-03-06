<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 14-09-2016
 * Time: 0:54
 */

namespace Confee\Support\Http\Routing;


abstract class RouteFile
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    public function __construct($options = [])
    {
        $this->options = $options;
        $this->router = app('router');
    }

    /**
     *
     */
    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    /**
     * @return mixed
     */
    abstract protected function routes();
}