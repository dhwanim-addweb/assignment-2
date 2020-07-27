<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MyDemoMail;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\User;
use PDF;
use DB;
use Auth;

class TestController extends Controller
{
  public function myDemoMail()
   {
     $users = DB::table("users")->get();
     $pdf = PDF::loadView('details',['users' => $users]);
     $pdf->save(storage_path('app\pdf1\details.pdf'));
     $myEmail = Auth::user()->email;
     Mail::to($myEmail)->send(new MyDemoMail());
     //Storage::putFile('pdf', new File('pdf\details.pdf'));
     return view('reply');
   }
}
