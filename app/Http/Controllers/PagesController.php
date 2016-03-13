<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   public function contact(){
        return view('pages.contact');
    }
    public  function about() {
//        $name = 'Ilina <span style="color: red;">Nedeva</span>';
//        return view('pages.about')->with([
//            'first'=>'Ilina',
//            'last'=>'Nedeva'
//        ]);

//        $data = [];
//        $data['first']='Ilina';
//        $data['last']='Nedeva';
//        return view('pages.about',$data);

//        $people = [
//            'Ilina' , 'Eric','Katya'
//        ];
        $people=[];
        return view('pages.about',compact('people'));
    }
}
