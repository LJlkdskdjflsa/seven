<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        // $data = [
        //     'name' => 'elon04',
        //     'email' => 'elon04@gmail.com',
        //     'password' => 'elon04pass',
        // ];
        // User::create($data);

        // $user = new User();
        // $user ->name = "LJ05";
        // $user ->email = "LJ05@gmail.com";
        // $user ->password = "LJ05pass";
        // $user->save();
        // dd($user);

        $user = User::all();
        // User::where('id', 1)->delete();

        // DB::insert('insert into users (name ,email,password) values (?, ?,?)', [
        //     'LJ03', '03@gmail.com','p03'
        //     ]);
        // $affected = DB::update(
        //     'update users set name = ? where id = 1',
        //     ['LJ7']
        // );
        // $deleted = DB::delete('delete from users where id = 3');

        // $users = DB::select('select * from users');
        return $user;
    }
}
