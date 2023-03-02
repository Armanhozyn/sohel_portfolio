<?php
    class Format{
        public function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
    }


?>
