<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class SignUpModel extends Model
    {
        function insert_reseller($request)
        {
            DB::table('reseller')-> insert([
                'firstname' => $request -> R_NAMA,
                'lastname' => $request -> R_NAMA,
                'phone' => $request -> R_HP,
                'address' => $request -> R_ALAMAT,
                'email' => $request -> R_EMAIL,
                'password' => $request -> R_PASSWORD
                // r_id, m_id, r_foto, r_delete belom
            ]);
        }
    }


?>
