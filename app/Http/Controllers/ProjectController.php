<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PluginController;


class ProjectController extends Controller
{
    private $menu, $plugin;
    public function __construct()
    {
        $this->menu = new MenuController();
        $this->plugin = new PluginController();
    }

    public function index()
    {
        return view(
            'index',
            array(
                "template" => "portfolio",
                "title" => "Proyecto",
                "colorTheme" => $this->plugin->getColorTheme(),
                "typeTheme" => $this->plugin->getTypeTheme(),
                "menu" => $this->menu->getMenu()
            )
        );
    }

    public function getAll()
    {
        return Project::all();
    }

}
