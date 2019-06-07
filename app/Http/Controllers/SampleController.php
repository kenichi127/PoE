<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = auth()->user()->name;
    $text = auth()->user()->name;
    $to = auth()->user()->D_email;

    Mail::to($to)->send(new SampleNotification($name, $text));
    return redirect('/home');
  }
}
