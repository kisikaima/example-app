<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeShowController extends Controller
{
  /**
  * http://127.0.0.1:8080/time
  *
  * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
  */
  public function timeshow()
  {
    $time = Carbon::now();
    return view('timeshow', compact('time'));
    //  return view('timeshow')->with(['time' => $time]); 
  

  $time = new Carbon();
  echo $time; //2020-09-04 16:00:21
  echo Carbon::now(); // 2020-09-04 16:00:21。この場合はnewすらする必要はない
  $time = new Carbon();
  echo $time . "." . substr("00000".$time->micro, -6 , 3); // 2020-09-04 21:44:19.592
  }
}
   
  


