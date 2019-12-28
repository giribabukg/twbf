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
		$users = User::latest()->paginate(10);
		return view('index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 10);
  }
}
