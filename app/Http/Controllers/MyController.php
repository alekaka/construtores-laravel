<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getName() 
    {
        return "Thiago Alexander";
    }

    public function getAge() 
    {
        return "20 anos";
    }

    public function multiply($n1, $n2) 
    {
        return $n1*$n2;
    }

    public function getNameByID($id) 
    {
        $v = ["Mario", "Edson", "Roberto", "Jean"];

        if ($id >= 0 && $id < count($v))
            return $v[$id];

        return "Não encontrado";
    }
}
