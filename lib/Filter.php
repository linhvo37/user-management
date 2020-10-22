<?php

// Class Name: Session

class Filter{

    public static function CheckLengtPass($pass){
        if(strlen($pass) < 6){
            return False;
        }else return True;

    }
    public static function CheckNumberPass($pass){
        if(preg_match("#[0-9]+#",$pass)){
            return True;
        }else return False;
    }
    public static function CheckCharPass($pass){
        if(preg_match("#[a-z]+#",$pass)){
            return True;
        }else return False;
    }
    public static function CheckXss($pass){
        if( preg_match("<script>",$pass)){
            return False;
        }else return True;
        
    }
  // Session Start Method
  
}
?>  