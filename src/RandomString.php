<?php

namespace Vesic\RandomString;

class RandomString {
    
    protected static $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    public static function getChars($length = 32) {
        if (!is_int($length) || $length < 0) {
            throw new Exception('Length not valid.');
        }
        
        $chars_len = strlen(self::$chars) - 1;
        
        $output = '';
        
        foreach (range(0, $length - 1) as $value) {
            $output .= self::$chars[mt_rand(0, $chars_len)];
        }
        
        return $output;
    }
    
}
