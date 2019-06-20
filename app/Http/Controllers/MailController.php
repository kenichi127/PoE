<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotification;

class MailController extends Controller
{
  public function MailNotification()
  {
    $name = auth()->user()->name;
    $text = auth()->user()->name;
    $to = auth()->user()->D_email;
    Mail::to($to)->send(new MailNotification($name, $text));
    return redirect('/home');
  }
}
