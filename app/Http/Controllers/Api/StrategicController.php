<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\StrategicTarget;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StrategicController extends Controller
{
    /**
     * Show All Startegic Controller
     * 
     * @return Response
     * @author luck_nut
     */
    public function index()
    {
    }

    /**
     * Show individual Strategic Content
     * 
     * @param StrategicTarget $strategicTarget
     * @return Response
     * @author luck_nut
     */
    public function show(StrategicTarget $strategicTarget)
    {

    }
}
