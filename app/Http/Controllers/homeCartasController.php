<?php

namespace App\Http\Controllers;
use App\Models\Noticiashome;

use Illuminate\Http\Request;

class homeCartasController extends Controller
{
    public function index()
    {
        $noticiashomes = Noticiashome::paginate();
        
        return view('welcome',compact('noticiashomes'));
        
    }
}
