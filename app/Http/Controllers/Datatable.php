<?php

namespace App\Http\Controllers;

use App\Models\BruteForce;

class Datatable extends Controller
{
    public function __construct()
    {
        # code...
    }

    public function index()
    {
        $data['dataArray'] = BruteForce::select(['log_ip', 'log_domain', 'log_uri', 'log_reason', 'log_user'])->simplePaginate(15);

        return view('welcome', $data);
    }
}
