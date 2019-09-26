<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerOddEndPoint extends Controller
{
    public function GetNumDisp(){
      $arrnumdisp = [];
      for($i=10; $i<101; $i++){
        if($i % 2 != 0){
          $arrnumdisp[]= $i;
        }
      }
      return view('Odd-view',compact('arrnumdisp'));
    }
}
