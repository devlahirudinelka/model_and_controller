<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller

{
    protected $User;
    public function __construct()
    {
        $this->User = new User();
    }
    public function saveData()
    {
        $data = [
            'name' => 'Dulminisdfgf',
            'email' => 'Dulmini@gmail.comssdsvf',
            'password' => '123s',
        ];
        $this->User->create($data);
        dd($data);
    }

    public function updateData()
    {
        $user_id = 2;
        $data = [
            'name' => 'Dulmini edit',
            'email' => 'Dulmini@gmail.com edit',
            'password' => '123 edit',
        ];
        $User = $this->User->find($user_id);
        $User->update(array_merge($User->toArray(), $data));
        dd($data);
    }
    public function deleteData()
    {
        $user_id = 6;
        $User = $this->User->find($user_id);
        $User->delete();
    }
    public function showData()
    {
        $response['users'] = $this->User->all();
        return view('welcome')->with($response);
    }
    public function showDatas()
    {
        $response['users'] = $this->User->all();
        return view('show')->with($response);
    }
}
