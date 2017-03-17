<?php

namespace App\Http\Controllers;
use App\Http\Middleware\RedirectIfAuthenticated;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
    public function view_login()
    {
        Auth::logout();
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            'webmail' => 'bail|required|max:255',
            'password' => 'required|max:255',
        ]);

        $webmail = $request->input('webmail');
        $password = $request->input('password');

        $server='ssl://tamdil.iitg.ernet.in';
        //$server='tls://202.141.80.13';

        //do we have the webmail ids of 4th yearites who are eligible to vote otherwise how to identify them
        // no of users with this webmail currently in users table

//        if(User::where('webmail',$webmail)->count())
//        {
//            $fp = fsockopen($server,995, $errno, $errstr, 10);
//            dd($fp);
//            if ($fp) {
//                dd($fp);
//                $st = stream_set_blocking($fp, 1);
//                $trash = fgets($fp, 128); // Trash to hold the banner
//                fwrite($fp, "user $webmail\r\n"); // POP3 USER CMD
//                stream_set_timeout($fp, 2);
//                $user = fgets($fp);
//                $u = 'hi';
//                if (trim($user) == '+OK') {
//                    fwrite($fp, "pass $password\r\n");
//                    stream_set_timeout($fp, 2);
//                    $pass = fgets($fp, 128);
//                    if (trim($pass) == '+OK Logged in.') {
//                        $u = 'Successfully Logged In';
//                        dd(User::where('webmail', $webmail)->first());
//                        Auth::user()->login(User::where('webmail', $webmail)->first());
//                        return redirect('payment');
//                    } else {
//                        $error = 'Wrong Details';
//                    }
//                } else {
//                    $error = 'There was some error. Please Try Again';
//                }
//                fwrite($fp, "quit\r\n");
//                stream_set_timeout($fp, 2);
//                fclose($fp);
//            }
//            else
//            {
//                $error='cannot connect';
//            }
//        }
//        else {
//            $error='Webmail ID doesnot exist. Please contact the authorities.';
//        }
//

  $user=User::where('webmail', $webmail)->first();

        if ($user!=Null)
        {
            Auth::login($user);
            // Authentication passed...
            return view('options');
        }
        else {
            return redirect()->intended('login');
        }
    }

    public function donate()
    {
        if(!Auth::check())
        {
            return redirect('login');
        }
        return view('transactionid');
    }

    public function choice()
    {
        if(!Auth::check())
        {
            return redirect('login');
        }
        $options=DB::table('options')->get();
//        dd($options);
        return view(('choice'),compact('options'));

    }

    public function transactionid(Request $request)
    {
        if(!Auth::check())
        {
            return redirect('login');
        }
        $this->validate($request,[
            'transactionid' => 'bail|required|integer|digits_between:5,10',
        ]);

        $transactionid = $request->input('transactionid');
        $user=Auth::user();

        DB::update('update users set donation_via_transaction = ? where id = ?', [true,$user->id]);
        DB::insert('insert into transactions (transactionid, webmail_of_donater,id_of_donater) 
                    values (?, ?, ?)', [$transactionid,$user->webmail,$user->id]);

        return redirect('success');
    }
    public function payment(Request $request)
    {
//        dd($request);
        if(!Auth::check())
        {
            return redirect('login');
        }
       // dd($request);
        $choice=$request->choice;
        $option = DB::table('options')->where('id',$request->choice)->get();
        $count=$option[0]->count+1;
        DB::update('update options set count = ? where id = ?', [$count,$request->choice]);

        //dd(Auth::user());

        $user=Auth::user();
        //dd($user);

        DB::update('update users set choice = ? where id = ?', [$choice,$user->id]);

        //need to add in users table as well and authentication of user to be added
        //front-end of app
        return redirect('success');
    }

    public function success()
    {
        return view('success');
    }

    public function test()
    {
        dd(openssl_get_cert_locations());
        $xportlist = stream_get_transports();
        dd($xportlist);

//        $webmail='a.dash';
//        dd(User::where('webmail', $webmail)->first());
    }

}
