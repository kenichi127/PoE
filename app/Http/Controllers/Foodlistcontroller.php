<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Foods;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\EditFood;
class FoodlistController extends Controller
{
    public function show(){
        $allfoods = Foods::all();
        $foods = $allfoods->where('user_id', '==', auth()->user()->id);
        return view('foodlist', ['foods' => $foods]);
        }
    public function post(Request $request)
        {   
            $food = new Foods;
            $food->foodname = $request->input('foodname');
            $food->date= $request->input('date');
            Auth::user()->foods()->save($food);
            return redirect('/food');
        }
    public function delete (Request $request)
        {
        Foods::find($request->id)->delete();
        return redirect('/food');
        }
    public function food_edit($id)
        {
            $food = Foods::find($id);
            return view('food_edit', compact('food'));
        }
    public function food_update(EditFood $request, $id)
        {
            $food = Foods::find($id);
            $food->foodname = $request->input('foodname');
            $food->date = $request->input('date');
            $food->save();
            return redirect('/food');
        }
}
