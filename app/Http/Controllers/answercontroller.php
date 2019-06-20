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
    public function answer(Request $request)
    {   
        $now = Carbon::now();
        $years=$now->year;
        $months=$now->month;
        $days=$now->day; 
        $searchyear=$request->input('year');
        $searchmonth=$request->input('month');
        $searchday=$request->input('day');
        $searchplace=$request->input('place');
        if($searchyear === '2020' or $searchyear === '2024' 
           or $searchyear === '2028' or $searchyear === '2032' 
           or $searchyear === '2036' or $searchyear === '2040' 
           or $searchyear === '2044' or $searchyear === '2048' 
           or $searchyear === '2052' or $searchyear === '2056' 
           or $searchyear === '2060' or $searchyear === '2064' 
           or $searchyear === '2068'){
            if($searchmonth==='2'){
                if($searchday === '30' or $searchday === '31'){
                    return view('answer',compact('searchyear','searchmonth','searchday'));
                }else{
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
                }}elseif($searchmonth === '4' or $searchmonth === '6' 
                or $searchmonth === '9' or $searchmonth === '11'){
                if($searchday==='31'){
                    return view('answer',compact('searchyear','searchmonth','searchday'));
                }else{
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
            }}else{
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
}}else{
    if($searchmonth==='2'){
        if($searchday === '29' or$searchday === '30' or $searchday === '31'){
            return view('answer',compact('searchyear','searchmonth','searchday'));
        }else{
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
return view('answer',compact('worldpercentage','percentage','searchyear','searchmonth','searchday','searchplace'));
}}elseif($searchmonth === '4' or $searchmonth === '6' 
or $searchmonth === '9' or $searchmonth === '11'){
    if($searchday==='31'){
        return view('answer',compact('searchyear','searchmonth','searchday'));
    }else{
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
return view('answer',compact('worldpercentage','percentage','searchyear','searchmonth','searchday','searchplace'));
}}else{
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
return view('answer',compact('worldpercentage','percentage','searchyear','searchmonth','searchday','searchplace'));}} 
    }
}
