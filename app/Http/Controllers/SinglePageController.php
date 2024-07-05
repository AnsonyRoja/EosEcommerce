<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    function culture()
    {
        return view('singlepage.culture');
    }

    function sucursal($id = '')
    {
        $file;
        switch ($id) {
            case 'bio-paraparal':
                $file = "bio-paraparal";
                break;
            case 'bio-santa-cecilia':
                $file = "bio-santa-cecilia";
                break;
            case 'bio-la-granja':
                $file = "bio-express-la-granja";
                break;
            case 'bio-el-bosque':
                $file = "bio-express-el-bosque";
                break;
            default:
                $file = "sucursal";
                break;
        }
        return view('singlepage.'.$file);
    }

    function contact()
    {
        return view('singlepage.contact');
    }
}
