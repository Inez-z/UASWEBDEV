<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

?>
