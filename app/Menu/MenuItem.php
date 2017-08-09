<?php
/**
 * Created by PhpStorm.
 * User: merlin.steuer
 * Date: 09.08.2017
 * Time: 15:22
 */

namespace App\Menu;

use Illuminate\Support\Facades\Route;

class MenuItem {
    public $route = '';
    public $name = '';

    public $children = [];

    public function __construct($route, $name, $children = [])
    {
        $this->route = $route;
        $this->name = $name;
        $this->children = $children;
    }

    public function is_active($segment = 0)
    {
        $this_segments = explode('.', $this->route);
        $route_segments = explode('.', Route::current()->getName());

        if(count($this_segments) < ($segment + 1) || count($route_segments) < ($segment + 1))
        {
            return false;
        }

        return $this_segments[$segment] == $route_segments[$segment];
    }
}