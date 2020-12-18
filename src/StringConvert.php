<?php


namespace BABA\Utils;


/**
 * Class StringConvert
 * @package BABA\Utils
 * @author Juraj Puchký - BABA Tumise s.r.o. <info@baba.bj>
 */
class StringConvert
{

    public static function charactersCP1250UTF8()
    {
        return
            [
                "c1" => "c381", // Á
                "c9" => "c389", // É
                "cc" => "c49a", // Ě
                "cd" => "c38d", // Í
                "dd" => "c39d", // Ý
                "d3" => "c393", // Ó
                "da" => "c39a", // Ú
                "d9" => "c5ae", // Ů
                "c4" => "c384", // Ä
                "c5" => "c4b9", // Ĺ
                "bc" => "c4bd", // Ľ
                "d4" => "c394", // Ô
                "8e" => "c5bd", // Ž
                "8a" => "c5a0", // Š
                "c8" => "c48c", // Č
                "d8" => "c598", // Ř
                "cf" => "c48e", // Ď
                "8d" => "c5a4", // Ť
                "d2" => "c587", // Ň
                "e1" => "c3a1", // á
                "e9" => "c3a9", // é
                "ec" => "c49b", // ě
                "ed" => "c3ad", // í
                "fd" => "c3bd", // ý
                "f3" => "c3b3", // ó
                "fa" => "c3ba", // ú
                "f9" => "c5af", // ů
                "e4" => "c3a4", // ä
                "e5" => "c4ba", // ĺ
                "be" => "c4be", // ľ
                "f4" => "c3b4", // ô
                "9e" => "c5be", // ž
                "9a" => "c5a1", // š
                "e8" => "c48d", // č
                "f8" => "c599", // ř
                "ef" => "c48f", // ď
                "9d" => "c5a5", // ť
                "f2" => "c588", // ň
                "f6" => "c3b6", // ö
                "f5" => "c591", // ő
                "fc" => "c3bc", // ü
                "d6" => "c396", // Ö
                "d5" => "c590", // Ő
                "dc" => "c39c", // Ü
            ];

    }
    
    /**
     * @param $str String which will be converted
     * @return string
     */
    public static function utf8ToWindows1250($str) {

        foreach (self::charactersCP1250UTF8() as $windows1250 => $utf8) {
            $str = str_replace(hex2bin($utf8), hex2bin($windows1250), $str);
        }
        return $str;
    }

    /**
     * @param $str String which will be converted
     * @return string
     */
    public static function windows1250ToUtf8($str)
    {
        foreach (self::charactersCP1250UTF8() as $windows1250 => $utf8) {
            $str = str_replace(hex2bin($windows1250), hex2bin($utf8), $str);
        }
        return $str;

    }

}
