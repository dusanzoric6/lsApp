<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function fiksnoRacun($request){
        $sirina = $request->input('sirina');
        $visina = $request->input('visina');
        $cena = $sirina + $visina;
        
        return $cena;
    }
}