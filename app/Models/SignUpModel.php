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
    }


?>
