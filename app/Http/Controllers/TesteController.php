<?php 

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    public function teste($p1, $p2)
    {
        // echo "A soma de $p1 + $p2 é igual a: " . ($p1+$p2);
        return view('site.teste', ['p1' => $p1, 'p2' => $p2]);
    }
}