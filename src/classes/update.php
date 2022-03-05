<?php
    // require('DB.php');
    session_start();
    class update extends DB
    {
        public int $id;

        public function __construct($id,$auth)
        {
            // $this->user_id = $user_id;
            $this->id = $id;
            $this->auth = $auth;
            // $this->email = $email;
        }
        public function update()
        {
            # code...
            // $sql = DB::getInstance()->prepare("SELECT * FROM user");
            // $gd =$sql->execute();
            // $fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
            // foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
            //     if($v['id']== $this->$id){

            //     }
            // }

        // $sq = DB::getInstance()->prepare("SELECT authen FROM user WHERE id=$this->$id");
            if($this->auth == 0){

                $sql = DB::getInstance()->prepare("UPDATE user SET authen=1 WHERE id=$this->id");
                $sql->execute();
                $sql -> setFetchMode(PDO::FETCH_ASSOC);
            }else{
                $sql = DB::getInstance()->prepare("UPDATE user SET authen=0 WHERE id=$this->id");
                $sql->execute();
                $sql -> setFetchMode(PDO::FETCH_ASSOC);

            }

        }

    }