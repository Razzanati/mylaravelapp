<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ErrorController extends Controller
{
    public function notfound()
    {
        $locale = App()->getLocale();
        
        if ($locale == 'fr') 
        {
            return view('fr.404');
        }
        if ($locale == 'ar')
        {
            return view('ar.404');
        }
    }
}