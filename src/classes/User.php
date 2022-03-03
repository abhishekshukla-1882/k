<?php
    // require('DB.php');
    class User extends DB
    {
        public string $username;
        public string $password;
        public bool $authen;

        public function __construct($username, $password,$authen)
        {
            // $this->user_id = $user_id;
            $this->username = $username;
            $this->password = $password;
            // $this->email = $email;
        }

        public function addUser(){
            echo "aya";
            DB::getInstance()->exec("INSERT INTO user (username, password, authen) VALUES ('$this->username', ' $this->password', '$this->authen')");
            
        }
        public function login($username,$password){
            $sql = DB::getInstance()->prepare("SELECT * FROM user WHERE username = '$username' and  password ='$password'");
            $sql->execute();
            $sql -> setFetchMode(PDO::FETCH_ASSOC);
            echo "mila";
            echo $sql;
        }
    }
?>