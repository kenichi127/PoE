<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = 'PoE';
    $text = 'This is test.';
    $to = 'e1659106@gmail.com';
    Mail::to($to)->send(new SampleNotification($name, $text));
  }
}