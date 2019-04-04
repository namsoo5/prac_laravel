<?php

namespace App\Common;

class C
{
  const RESULT_OK="ok";
  const RESULT_YES="Yes";
  const RESULT_ERR=1000;
  const RESULT_SUCCESS=2000;


  public static function RESULT_ARRAY_OK(){

    return array(
	"result"=>self::RESULT_OK
    );
  }
  
  public static function RESULT_ARRAY_ERROR($message=null){

   return array(
	"result" => self::RESULT_ERR,
     	'message' => $message,
	"data" => []
      
 	 );
 }
  public static function RESULT_ARRAY_SUCCESS($data=null){

	return array(  
	"result"=>self::RESULT_SUCCESS,
	"message"=>"success",
	"data"=>$data
	);
	}

}

