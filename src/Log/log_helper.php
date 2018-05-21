<?php
namespace Log;
class LogHelper{

    public static function doTest($value){
        $file_name = __DIR__.'/../logs/doTest_'.date('Y_m_d',time());
        //        file_put_contents(__DIR__.'/../logs/doTest_'.date('Y_m_d',time()),serialize($value)."\n\n",FILE_APPEND);
        //        if ( file_exists($file_name)){
        //            $res = unlink($file_name);
        //        }
        file_put_contents($file_name,isset($value) ? print_r($value,true)."\n\n" : var_dump($value,true)."\n\n",FILE_APPEND);
    }

}



//namespace Log;
//if(!function_exists('doTest')){
//    function doTest($value){
//        $file_name = __DIR__.'/../logs/doTest_'.date('Y_m_d',time());
////        file_put_contents(__DIR__.'/../logs/doTest_'.date('Y_m_d',time()),serialize($value)."\n\n",FILE_APPEND);
////        if ( file_exists($file_name)){
////            $res = unlink($file_name);
////        }
//        file_put_contents($file_name,isset($value) ? print_r($value,true)."\n\n" : var_dump($value,true)."\n\n",FILE_APPEND);
//    }
//}