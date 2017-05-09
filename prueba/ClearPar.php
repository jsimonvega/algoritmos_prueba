<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class ClearPar { 
        
    function build($string) { 
        $arrphrase=array();
        $arrphrase2=array();
        $arrphrase=str_split($string);        
        
        $aguja  =array( "(",")" );        
        
                
        $newphrase="";
        
            for($i=0; $i<=count($arrphrase)-1; $i++ ){
                if($arrphrase[$i]==$aguja[0] && $arrphrase[$i+1]==$aguja[1]){
                    $arrphrase2[]=$aguja[0].$aguja[1];
                } 
            }
        
        $newphrase=implode("", $arrphrase2);
        return $newphrase ;
        
    } 
} 

$ClearPar= new ClearPar();

echo $ClearPar->build("()((()))");
