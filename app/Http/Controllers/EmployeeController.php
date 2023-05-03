<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
      $data = employee::all();
    return view('datapegawai' ,compact('data'));
   }
  
}
