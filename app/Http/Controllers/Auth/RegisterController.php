<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/regsuc';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'dob' => ['required'],
            'gender' => ['required', 'string', 'max:15'],
            'mobile' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'father_name' => $data['father_name'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'mobile' => $data['mobile'],
            'whatsapp_no' => $data['whatsapp_no'],
            'district' => $data['district'],
            'constituency' => $data['constituency'],
            'ward_no' => $data['ward_no'],
            'voter_id' => $data['voter_id']
        ];

        $user = User::create($userData);

        $toWelEmail = $data['email'];
        $toRegNotifEmail = 'dikshan.giribabu@gmail.com';

        $toWelEmailData = [
            'email_template' => 'emails.welcome',
            'receiver_name' => $data['name'],
            'subject' => 'TWBF - Welcome Email',
        ];

        $regNotifDataTmp = [
            'email_template' => 'emails.regnotif',
            'receiver_name' => 'Webadmin',
            'subject' => 'TWBF - Registration Notification',
        ];

        $regNotifData = $regNotifDataTmp + $userData;

        Mail::to($toWelEmail)->send(new SendMailable($toWelEmailData));

        Mail::to($toRegNotifEmail)->send(new SendMailable($regNotifData));

        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

}