<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * return all buildings
     */
    public function findAll(): Collection
    {
        return Building::all();
    }
}
