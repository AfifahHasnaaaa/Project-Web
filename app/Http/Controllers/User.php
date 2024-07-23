<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user/list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    //
    }
    /**
     * Display the specified resource.
     */
    public function show(UserModel $userModel)
    {
       //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserModel $userModel, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserModel $userModel)
    {
      //
            
    }
    public function dataDatables(Request $request)
    {
        $search = $request->query('search');
        $order = $request->query('order');

        switch ($order[0]['column']) {
            case '0':
                $orderby = 'id_user';
                break;

            case '1':
                $orderby = 'username';
                break;

            case '2':
                $orderby = 'password';
                break;

            case '3':
                $orderby = 'nama';
                break;

            case '4':
                $orderby = 'last_login';
                break;

            default:
                $orderby = 'id_user';
                break;
        }

        $data_db_total = UserModel::all();
        $data_db_filtered = UserModel::where('nama', 'like', '%' . $search['value'] . '%');


        $data_db_filtered = $data_db_filtered->get();

        $data_db = UserModel::where('nama', 'like', '%' . $search['value'] . '%');


        $data_db = $data_db->offset($request->query('start'))
            ->limit($request->query('length'))
            ->orderByRaw($orderby . ' ' . $order[0]['dir'])
            ->get(['user.*']);


        $data_formatted = [];

        foreach ($data_db as $key => $value) {

            $row_data = [];
            $row_data[] = $key + 1;
            $row_data[] = $value->username;
            $row_data[] = $value->password;
            $row_data[] = $value->nama;
            $row_data[] = $value->last_login;

            $data_formatted[] = $row_data;
        }

        $data_json = [
            'draw' => $request->query('draw'),
            'recordsTotal' => count($data_db_total),
            'recordsFiltered' => count($data_db_filtered),
            'data' => $data_formatted
        ];

        return json_encode($data_json);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
        public function login()
        {
        //
            return view('login/form');
        }
        public function loginProcess(Request $request)
        {
            $credentials = $request->only('username', 'password');

            $user = UserModel::where('username', $credentials ['username'])
            ->where('password', sha1($credentials['password']))
            ->first();
            if (!$user) {
                // Authentication failed
                return back()->withErrors([
                    'username' => 'Username & Password Salah',
            ]);
            }
            // Authentication passed
            Auth::login ($user);

            $request->session()->regenerate();
            session(['nama' => $user->nama]);
            session(['id_user' => $user->id_user]);

            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('coba');
            }
    }
    public function logout(Request $request)
    {
        Auth::guard('auth_user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
