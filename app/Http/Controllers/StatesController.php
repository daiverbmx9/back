<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StatesController extends Controller
{

    /*
     * Author:			Daiber Gonzalez.
     * Description:		This method is used for obtain all states.
     */
    public function getAll()
    {
    	return response()->json(
        [
            'states' => State::all(),
            'status' => 200
        ]);
    }
}
