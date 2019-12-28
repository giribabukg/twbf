<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class Reg2Controller extends Controller
{

  public function regsuc() {
      return view('auth.regsuc');
  }

}
