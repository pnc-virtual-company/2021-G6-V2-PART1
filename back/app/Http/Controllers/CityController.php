<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCities()
    {
        $citiesPath = storage_path('/countries/cities.json');
        $cities = json_decode(file_get_contents($citiesPath), true);

        return $cities;
    }

}
