<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    function listUser(){
        $students =[
            [
                'id'=>1,
                'name'=>'huy',
                'email'=>'huy@gmail.com',
                'address'=>'Ha Noi'
            ],
            [
                'id'=>2,
                'name'=>'hieu',
                'email'=>'abc@gmail.com',
                'address'=>'Ha Noi'
            ]
            ];

            // dd($students);
        return view('SinhVien.listUser',compact('students'));
        // ->with(
        //     ['students' => $students]
        // );
    }
}
