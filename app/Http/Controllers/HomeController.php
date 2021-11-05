<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\People;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * Disable constructor injection.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth',['except' => [
            'login',
            'index'
        ]]);
    } */

    /**
     * Show the main page of the application.
     *
     * @return \Illuminate\Http\Response or redirect to home route if user is logged in
     */
    public function index()
    {
        if(Auth::check()){
            return redirect('/home');
        }
        return view('welcome');
    }

    /**
     * Show the main page of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the login page of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $people = People::where('id',$request->id)->first();
        if(isset($people)) {
            Auth::guard('people')->loginUsingId($people->id);
            return redirect()->route('home');
        }
        else{
            return redirect()->route('index');
        }
    }
}
