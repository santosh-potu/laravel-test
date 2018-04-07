<?php

namespace SantoshLaravel\Http\Controllers;

use Illuminate\Http\Request;
use SantoshLaravel\Title;

class ClientController extends Controller
{
    public function __construct(Title $titles) {
        $this->titles = $titles->all();
    }
    
    public function di()
    {
        dd($this->titles);
    }
}
