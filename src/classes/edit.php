<?php
    class edit extends DB
    {
        // public int $id;
        // public string $name;
        // public string $price;
        // public string $category;

        public function __construct($id,$name,$price,$category)
        {
            // $this->user_id = $user_id;
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
            // $this->email = $email;
        }
        public function update()
        {
            $html= "";
            $html .= '<form method="POST">
            <input type="text" name="name" id="name"><br>
            <input type="text" name="price" id="price"><br>
            <input type="text" name="category" id="category"><br>
            <button type="submit" name="pro_data">Update</button>
            </form>
            
            ';
            echo $html;
            if(isset($_POST['pro_data'])){
                $name_pro = $_POST['name'];
                $price_pro = $_POST['price'];
                $category_pro = $_POST['category'];
                echo $name_pro,$price_pro,$category_pro,$this->id;
            }
            // $sql = DB::getInstance()->prepare("UPDATE product SET  name = $this->name , price = $this->price , category = $this->category WHERE  id = $this->id");
            // $sql->execute();
            // $sql -> setFetchMode(PDO::FETCH_ASSOC);
        }
    }