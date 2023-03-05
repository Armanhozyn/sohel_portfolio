<?php
    include "../config/config.php";
    include "../lib/Database.php";
    include "../helper/format.php";
    class Category{

        public $db;
        public $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function add_category($data){
            $category_name = $this->fm->validate($data['category_name']);

            $sql = "insert into categories(category_name) values('$category_name')";
            $insert_row = $this->db->insert($sql);
            if($insert_row){
                return "Inserted Successfully";
            }else{
                return "Something Went Wrong";
            }

        }

    }



?>
