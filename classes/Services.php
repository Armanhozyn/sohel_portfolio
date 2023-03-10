<?php
    include "../config/config.php";
    include "../lib/Database.php";
    include "../helper/format.php";
    class Services{

        public $db;
        public $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function add_service($data,$files){
            $title = $this->fm->validate($data['title']);
            $subtitle = $this->fm->validate($data['subtitle']);
            $description = $this->fm->validate($data['description']);
            $cat_id = $this->fm->validate($data['cat_id']);

            $file_name = $files['image']['name'];
            $file_size = $files['image']['size'];
            $file_temp = $files['image']['tmp_name'];

            $upload_image = "uploads/".$file_name;

            move_uploaded_file($file_temp,$upload_image);

            $sql = "insert into services(title,subtitle,description,image,cat_id) values('$title','$subtitle','$description','$upload_image',$cat_id)";
            $insert_row = $this->db->insert($sql);
            if($insert_row){
                return "Inserted Successfully";
            }else{
                return "Something Went Wrong";
            }

        }

        public function getAllCategory(){
            $sql = "select * from categories order by id desc";
            $result = $this->db->select($sql);
            return $result;
        }

    }



?>
