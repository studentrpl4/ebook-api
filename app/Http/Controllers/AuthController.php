<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120190,
            'Name' => 'Ramadhani Nuril Maulana Fatah',
            'Phone' => '081328049294',
            'Class' => 'XII RPL 6'
        ];
    }
}
