<?php


class format{

    private $title;
    public function ToUpper($upper){
        return ucfirst($upper);
    }
    public function ReadMore($text1, $limit = 400){
        $text1 = $text1 ."";
        $text1 = substr($text1, 0, $limit);
        $text1 = substr($text1, 0, strrpos($text1, ' '));
        $text1 = $text1. " ...";
        return $text1;
    }
    function nl($string) {
        if(isset($_SERVER['SHELL'])) return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
        return nl2br($string);
      }
 
      public function getTitle(){
          return $this->title;
      }
      public function setTitle($title){
          $this->name=$title;
      }
     
    //   login card validation
    public function input_validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}