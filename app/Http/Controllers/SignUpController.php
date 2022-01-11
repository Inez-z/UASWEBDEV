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
    public function insert(Request $req)
    {
        $messages = array();
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $name = $firstname . ' ' . $lastname;
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //lakukan validasi inputan
        if($firstname == ''){
            array_push($messages, 'First name must be filled out.');
        }
        if($lastname == ''){
            array_push($messages, 'Last name must be filled out.');
        }
        if($phone == ''){
            array_push($messages, 'Phone must be filled out.');
        }
        if($address == ''){
            array_push($messages, 'Address must be filled out.');
        }
        if($email == ''){
            array_push($messages, 'Email must be filled out.');
        }
        if($password == ''){
            array_push($messages, 'Password must be filled out.');
        }

        if (isset($messages) && count($messages)>0){
            Session::flash('danger', $messages);
            return redirect('/sign-up');
        }

        $data = [
            'name' => $name,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'password' => $password
        ];

        $user = New SignUpModel;
        $flag_exist = $user->insert($data);

        if($flag_exist==1){
            Session::flash('Success', 'You have successfully created an account!');
            $req->session()->flash('authentication2');
            return redirect('/sign-in');
        }
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
            $req->session()->flash('authentication');


            return redirect('/welcome');

        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email atau Password tidak sesuai!');
            return redirect('/sign-in');
        }

    }

    public function profile(){
        $email_login = Session::get('login');
        $user = new SignUpModel;
        $profile_login = $user->get_account($email_login);
        // dd($profile);
        return view('profile',compact('profile_login'));
    }

    public function editprofile(Request $req){
        $data_reseller = [
            'R_ID'      => $req->input('Reseller_ID'),
            'R_NAMA'  => $req->input('Name'),
            'R_ALAMAT' => $req->input('Address'),
            'R_HP'    => $req->input('Phone'),

        ];
        // dd($data_reseller);
        $user = new SignUpModel;
        $edit = $user->edit_account($data_reseller);
        // dd($edit);
        return redirect('/profile');
    }

    public function logout(Request $req){
        Session::flush();
        return redirect('/welcome');
    }
}

?>
