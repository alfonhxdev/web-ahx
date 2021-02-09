<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu()
    {
        $menu = new Menu();
        // dd($menu->first()->translate("es"));
        return $menu->all();
    }
}
