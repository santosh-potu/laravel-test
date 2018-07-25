<?php

namespace SantoshLaravel;

use Illuminate\Database\Eloquent\Model;

class ReadOnlybase 
{
    protected $titles = [];
    
    public function all(){
        return $this->titles;
    }
    
    public function get($id)
    {
        return $this->titles[$id];
    }
}
