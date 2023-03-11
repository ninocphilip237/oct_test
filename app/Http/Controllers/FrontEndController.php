<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\UserSystemInfoHelper;
class FrontEndController extends Controller
{

   public function homePage()
   {
    $getip = UserSystemInfoHelper::get_ip();
    $getbrowser = UserSystemInfoHelper::get_browsers();
    $getdevice = UserSystemInfoHelper::get_device();
    $getos = UserSystemInfoHelper::get_os();


    Ip::create([
        'ip'   => $getip,
        'browser'   => $getbrowser,
        'device'   => $getdevice,
        'os'   => $getos
    ]);

    $users = User::withTrashed()->latest()->paginate(10); //paginate

    return view('welcome',compact('users'));

   }


   public function new()
   {
    return view('new');
   }

   public function octhome()
   {
    return view('octilus.index');   }

   public function save()
   {

    request()->validate(['name' => 'required','name2' => 'required','phone' => 'required|numeric|digits:10','email' => 'email:rfc,dns','date_of_birth' => 'required']);             //validation
    $user = User::updateOrCreate([
    'email' => request('email'),
    'phone'   => request('phone')
            ],
      [
       'name'   => request('name'),
       'name2'   => request('name2'),

       'date_of_birth'   => request('date_of_birth'),
       'status'   => request('status'),
    ]
   );
return redirect()->route('/')->with('message','User created Succesfully');
}




}
