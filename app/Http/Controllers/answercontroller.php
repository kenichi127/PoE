<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Earthquakes;
use App\Daydata;
use App\Answer;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class AnswerController extends Controller
{
    public function daydata(Request $request)
    {
        $value=daydata::where('year', $request->input('year'))
                    ->where('Month', $request->input('month'))
                    ->where('Day', $request->input('day'))
                    ->first()
                    ->value;
        $year=daydata::where('year', '<', $years)
                    ->where('value',$value)->count();
        $month=daydata::where('year',$years)
                    ->where('Month','<',$months)
                    ->where('value',$value)->count();
        $day=daydata::where('year', $years)
                    ->where('Month', $months)
                    ->where('Day', $days)
                    ->where('value',$value)->count();
        $daydata = $year + $month + $day;
        return view('answer');
    }
    public function earthquake(Request $request)
    {
        $now = Carbon::now();
        $years=$now->year;
        $months=$now->month;
        $days=$now->day;
        $place=$request->input('place');
        $worldearthquakes=earthquakes::where('E_value',$value)->count();
        $earthquakes=earthquakes::where('place',$place)->where('E_value',$value)->count();
        return view('answer');
    }        
    public function answer(Request $request)
    {   
        $now = Carbon::now();
        $years=$now->year;
        $months=$now->month;
        $days=$now->day;
        $value=daydata::where('year', $request->input('year'))
                    ->where('Month', $request->input('month'))
                    ->where('Day', $request->input('day'))
                    ->first()
                    ->value;
        $place=$request->input('place');
        $worldearthquakes=earthquakes::where('E_value',$value)->count();
        $earthquakes=earthquakes::where('place',$place)->where('E_value',$value)->count();
        $year=daydata::where('year', '<', $years)
                    ->where('value',$value)->count();
        $month=daydata::where('year',$years)
                    ->where('Month','<',$months)
                    ->where('value',$value)->count();
        $day=daydata::where('year', $years)
                    ->where('Month', $months)
                    ->where('Day', $days)
                    ->where('value',$value)->count();
        $daydata = $year + $month + $day;
        $percentage = $earthquakes / $daydata * 100;
        $worldpercentage = $worldearthquakes / $daydata * 100;
        $searchyear=$request->input('year');
        $searchmonth=$request->input('month');
        $searchday=$request->input('day');
        $searchplace=$request->input('place');

        return view('answer',compact('worldpercentage','percentage','searchyear','searchmonth','searchday','searchplace')); 
    }
}
