<?php
    // require('DB.php');
    session_start();
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
            $this->authen = 0;
            // $this->email = $email;
        }

        public function addUser(){
            // $sql = DB::getInstance()->prepare("SELECT * FROM user");
            // $sql->execute();
            // $sql -> setFetchMode(PDO::FETCH_ASSOC);
            // foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
            //     if($v['username'] == $this->username){
            //         echo "Username already Exist";
            //         break;
            //     }
            // }
            DB::getInstance()->exec("INSERT INTO user (username,password,authen) VALUES ('$this->username', '$this->password', '$this->authen')");
            
        }
        public function login($username,$password){
            $sql = DB::getInstance()->prepare("SELECT * FROM user WHERE username='$username' and  password='$password'");
            $gd =$sql->execute();
            $fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
         
            foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
                // echo $k;
                // echo $v['password'];
            }
            if($v){ 
                if($v['authen']==1){
                    array_push($_SESSION['login'],$v['username']);
                    array_push($_SESSION['login'],$v['password']);
                    array_push($_SESSION['login'],$v['authen']);
                    header('location:dashboard.php');
                }
                else{
                    array_push($_SESSION['login'],$v['username']);
                    array_push($_SESSION['login'],$v['password']);
                    array_push($_SESSION['login'],$v['authen']);
                    header('location:classes/profile.php');

                }

            }
            else{
                echo "authentication problem please check email and password!";
            }
            
        }
        // public function dashboard(){
        //     $sql = DB::getInstance()->prepare("SELECT * FROM user WHERE username='$username' and  password='$password'");
        //     $gd =$sql->execute();
        //     $fg  =$sql -> setFetchMode(PDO::FETCH_ASSOC);
        //     html = '<thead>
        //     <tr>
        //     <th scope="col">Id</th>
        //       <th scope="col">Username</th>
        //       <th scope="col">password</th>
        //       <th scope="col">Auth</th>
        //       <th scope="col">Permission</th>
        //     </tr>
        //   </thead>';
        //     foreach(new RecursiveArrayIterator($sql->fetchAll()) as $k => $v){
        //         html .=  '<tbody>
        //         <tr>
        //           <td>1,001</td>
        //           <td>random</td>
        //           <td>data</td>
        //           <td>placeholder</td>
        //           <td>text</td>
        //         </tr>';
        //     }
        //     html .='</tbody>';

        // }
    }
?>