<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUpModel;
use Session;

class SignUpController extends Controller
{
    function __construct()
    {

    }

    // fungsi untuk insert data ke dalam database
    public function insert(Request $request)
    {
        $signup = $this->insert_reseller($request);
        return redirect('/sign-in');
    }
    public function authentication(Request $req){
        $email = $_POST['email'];
        $password = $req->input('password');
        $data = [
            'email' => $email,
            'password' => $password
        ];

        $user = new SignUpModel;
        $flag_exist = $user->isExist($data);


        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::put('login', $email);
            Session::put('pass', $password);
            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/welcome');
        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email atau Password tidak sesuai!');
            return redirect('/sign-in');
        }
    }

}

?>
