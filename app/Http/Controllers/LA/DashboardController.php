<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
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
     * @return Response
     */
    public function index()
    {
        $reservations = DB::table('karutes')->select(DB::raw('*'))->whereRaw('Date(time) = CURDATE()')->get();
        return view('la.dashboard', [
            'events' => [
                '2017-01-12' => '24',
                '2017-01-14' => '12',
                '2017-01-16' => '27',
            ],
            'reservations' => $reservations
        ]);
    }
}