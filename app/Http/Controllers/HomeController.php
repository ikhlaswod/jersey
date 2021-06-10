<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use App\Custom;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        if (Laratrust::hasRole('membercustom')) return $this->membercustomDashboard();
        if (Laratrust::hasRole('karyawan')) return $this->karyawanDashboard();
        if (Laratrust::hasRole('user')) return $this->userDashboard();
    }
    protected function adminDashboard()
    {
        $countNotif=Custom::where('status',0)->get()->count();
        return view('admin.index',compact('countNotif'));
    }

    protected function memberDashboard()
    {
        return view('frontend.index');
    }

    protected function membercustomDashboard()
    {
        return view('frontend.index');
    }

    protected function karyawanDashboard()
    {
        $countNotif=Custom::where('status',0)->get()->count();
        return view('home',compact('countNotif'));
    }

    protected function userDashboard()
    {
        return view('frontend.index');
    }
}
