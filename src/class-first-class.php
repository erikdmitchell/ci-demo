<?php

namespace erikdmitchell\ci_demo;

/**
 * First_Class class.
 */
class First_Class {

    /**
     * Encode a string
     * 
     * @access public
     * @param mixed $string
     * @return void
     */
    public function encode_string($string) {
        $string = strtolower($string);
        $src = "abcdefghijklmnopqrstuvwxyz0123456789";
        $dst = "jklmnopqrstuvwxyz0123456789abcdefghi";
        
        for ($i = 0; $i < strlen($string); $i++) {
            $pos = strpos($src, $string[$i]);
            if ($pos === false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i] = $dst[$pos];
        }
        
        return $string;
    }

    /**
     * Decode a string
     * 
     * @access public
     * @param mixed $string
     * @return void
     */
    public function decode_string($string) {
        $string=strtolower($string);
        $src="jklmnopqrstuvwxyz0123456789abcdefghi ";
        $dst="abcdefghijklmnopqrstuvwxyz0123456789 ";
        for ($i=0; $i<strlen($string); $i++) {
            $pos=strpos($src, $string[$i]);
            if ($pos===false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i]=$dst[$pos];
        }
        return $string;
    }
}
