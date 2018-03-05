<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePropertiesRequest;
use App\Http\Requests\Admin\UpdatePropertiesRequest;

class ListController extends Controller
{
    //
    /**
     * Display a listing of Property.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request('show_deleted') == 1) {
            $properties = Property::onlyTrashed()->get();
        } else {
            $properties = Property::all();
        }

        return view('welcome', compact('properties'));
    }
}
