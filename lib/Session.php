
<?php

// this is session class
class Session{
    public static function init(){
        session_start();
    }
    public static function set($key, $val){
        $_SESSION['$key'] = $val;
    }
    public static function get($ky){
        if(isset($_SESSION['$key'])){
            return $_SESSION['$key'];
        }else{
            return false;
        }
    }
    public static function CheckSession(){
        self::init();
        if(self::get("login") === false){
            self::destroy();
        }
    }
    public static function destroy(){
        session_destroy();
        header('Location: ../Login/login.php');
    }
}