<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'huy'
            ],
            [
                'id' => '2',
                'name' => 'h'
            ]
        ];
        // echo 'show';
        return view('user.list')->with([
            'users' => $users
        ]);
    }
    function getUser($id, $name = null)
    {
        echo $id;
        echo $name;
    }
    function updateUser(Request $request)
    {
        echo $request->id;
    }
}
