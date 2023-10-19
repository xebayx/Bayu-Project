<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() 
    {
        return view ('shopping.pelanggan.page.home', [
            'title' => 'Home',
        ]);
    }
    public function shop() 
    {
        return view ('shopping.pelanggan.page.shop', [
            'title' => 'Shop',
        ]);
    }
    public function transaction() 
    {
        return view ('shopping.pelanggan.page.transaction', [
            'title' => 'Transaction',
        ]);
    }
    public function contact() 
    {
        return view ('shopping.pelanggan.page.contact', [
            'title' => 'Contact',
        ]);
    }
}
