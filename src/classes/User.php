<?php
    // require('DB.php');
    class User extends DB
    {
        public string $username;
        public string $password;
        public int $authen;

        public function __construct($username, $password,$authen)
        {
            // $this->user_id = $user_id;
            $this->username = $username;
            $this->password = $password;
            $this->authen = $authen;
            // $this->email = $email;
        }

        public function addUser(){
    
            DB::getInstance()->exec("INSERT INTO user (username,password,authen) VALUES ('$this->username', '$this->password', '$this->authen')");
            
        }
        public function login($username,$password){
            $sql = DB::getInstance()->prepare("SELECT * FROM user WHERE username='$username' and  password='$password'");
            $gd =$sql->execute();
            $fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
            // echo "<pre>";
            // print_r($fg['username']);
            // echo "</pre>";
            // if($fg){
            //     header('location:classes/profile.php');

            // }
            // else{
            //     echo "Authentication Wrong";
            // }

            // echo "mila";
            // $count = mysqli_num_rows($sql);
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
                // echo $k;
                // echo $v['password'];
            }
            if($v){ 
                if($v['authen']==1){
                header('location:dashboard.php');
                }
                else{
                    header('location:classes/profile.php');

                }

            }
            else{
                echo "authentication problem please check email and password!";
            }
            
        }
        // public function 
    }
?>