<?php
/**
 * Created by PhpStorm.
 * User: ashraful
 * Date: 12/2/18
 * Time: 1:20 PM
 */

namespace App\Http\Controllers;


use App\User;

class AppUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $appUsers = User::where('user_type','APP_USER')->get();
        return view('appUserList',compact('appUsers'));
    }

}