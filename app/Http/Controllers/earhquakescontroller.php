<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Earthquakes;
use App\Daydata;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EarhquakesController extends Controller
{      
    public function post(Request $request)
    {   
        $earthquake = new earthquakes;
        $earthquake->place = $request->input('place');
        $earthquake->year= $request->input('year');
        $earthquake->Month = $request->input('month');
        $earthquake->Day= $request->input('day');
        $earthquake->earthquakelevel= $request->input('level');
        $earthquake->E_value=daydata::where('year', $request->input('year'))
                    ->where('Month', $request->input('month'))
                    ->where('Day', $request->input('day'))
                    ->first()
                    ->value;
        Auth::user()->earthquakes()->save($earthquake);
        return redirect()->back();
    }
}
?>