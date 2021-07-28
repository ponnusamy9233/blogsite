<?php

class Photo extends Main{

    public $id;
    public $title;
    public $description;
    public $caption;
    public $alternative_text;
    public $filename;
    public $type;
    public $size;
    public $tmp_file;

    public function upload_image($file){
     

       $this->filename = $file['name'];
       $this->type = $file['type'];
       $this->tmp_file = $file['tmp_name'];
       $this->size = $file['size'];

       if(!empty($this->tmp_file)){

           if(move_uploaded_file($this->tmp_file,"../img/blog/$this->filename")){
               
               $this->create('photo','title,description,filename,type,size',"'$this->title','$this->description','$this->filename','$this->type','$this->size'");
           }
       }
        

    }
    public  function delete_img($table){
          if($this->delete($table)){
              $target ="../img/blog/$this->filename";
              unlink($target);
              header('location:view_photos.php');

          }
    }

}
?>