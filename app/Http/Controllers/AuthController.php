<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return['nis' =>'3103118136',
        'name' => 'Valentino Al Falaq',
        'gender' => 'Laki - Laki',
        'phone' => '+62 822-4200-4268',
        'class' => 'XII RPL 4'];
     }
}
