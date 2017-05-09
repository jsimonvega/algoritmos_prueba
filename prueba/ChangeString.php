<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ChangeString { 
        
    function build($string) { 
        $arrphrase=array();
        $arrphrase2=array();
        $arrphrase=str_split($string);
        $arrphrase2=str_split($string);
        
        $aguja  =array( "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r","s", "t", "u", "v", "w", "x", "y", "z"
                       ,"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R","S", "T", "U", "V", "W", "X", "Y", "Z");        
        $replace=array( "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s","t", "u", "v", "w", "x", "y", "z", "a"
                       ,"B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "Ñ", "O", "P", "Q", "R", "S","T", "U", "V", "W", "X", "Y", "Z", "A");
                
        $newphrase="";
        for($a=0; $a<=count($aguja)-1; $a++ ){
            for($i=0; $i<=count($arrphrase)-1; $i++ ){
                $arrphrase[$i]==$aguja[$a] ? $arrphrase2[$i]=$replace[$a] :$arrphrase[$i]=$arrphrase[$i];         
            }
        }
        $newphrase=implode("", $arrphrase2);
        return $newphrase ;
        
    } 
} 

$changeString= new ChangeString();

echo $changeString->build("FARIDE");
