<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

    class SignUpModel extends Model
    {
        public function insert($data){
            $cmd = "CALL pInsertReseller(:name, :address, :email, :phone, :password)";
            $res = DB::insert($cmd,$data);
            return $res;
        }

        public function isExist($data){
            $cmd = "SELECT count(*) is_exist ".
                    "FROM reseller ".
                    "WHERE R_EMAIL=:email AND R_PASSWORD=:password;";

            $res = DB::select($cmd,$data);

            if($res[0]->is_exist == 1){
                return true;
            }
            return false;

            if(isset($res) && count($res) > 0){
                return $res;
            }
            return null;
        }

        public function get_account($email_login){
            $cmd = "SELECT *  from reseller r WHERE R_EMAIL=:email";
            $data=['email'=> $email_login];
            $res = DB::select($cmd,$data);
            return $res[0];
        }

        public function edit_account($data_reseller){
            $cmd = "UPDATE reseller SET R_NAMA=:R_NAMA, R_ALAMAT=:R_ALAMAT, R_HP=:R_HP WHERE R_ID=:R_ID";
            // $data=['email'=> $email_login];
            // dd($cmd);
            $res = DB::update($cmd,$data_reseller);
            return $res;
        }
    }


?>
