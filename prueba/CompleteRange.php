<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompleteRange { 
        
    function build($string) { 
        $arrphrase=array();
        $arrphrase2=array();
        $arrphrase3=array();
        $arrphrase=explode(',',$string);        
        $newphrase="";        
        $finalphrase="";        
        for($i=0; $i<=count($arrphrase)-1; $i++ ){
            if(isset($arrphrase[$i]) && isset($arrphrase[$i+1])){
                $arrphrase2=range($arrphrase[$i], $arrphrase[$i+1]);
                if($i>0){
                    $newphrase.=",".implode(",", $arrphrase2);
                }else{
                    $newphrase.=implode(",", $arrphrase2);
                }
            }
        }
        $arrphrase3=explode(',',$newphrase);        
        $arrphrase3=array_unique($arrphrase3);
        $finalphrase=implode(",", $arrphrase3);
        return $finalphrase ;        
    } 
} 

$CompleteRange= new CompleteRange();

echo $CompleteRange->build("1,10,12,15");
