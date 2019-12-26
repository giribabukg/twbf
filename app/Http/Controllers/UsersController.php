<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index() {

		// Role :: create(['name' => 'admin']);
		return view('index');

  }
}
