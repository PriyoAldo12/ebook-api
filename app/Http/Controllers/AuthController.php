<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return[
            'NIS' => '3103119146',
            'Name' => 'Priyo Aldo',
            'Gender' => 'Laki-laki',
            'Phone' => '08157992757',
            'Class' => 'XII RPL 5',
        ];
    }
}
