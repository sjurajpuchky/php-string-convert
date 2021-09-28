<?php


namespace BABA\Utils;


/**
 * Class StringConvert
 * @package BABA\Utils
 * @author Juraj Puchký - BABA Tumise s.r.o. <info@baba.bj>
 */
class StringConvert
{

    public static function charactersWINDOWS1250UTF8()
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
                "b0" => "c2b0",
                'df' => "c39f",
//                "96" => "2d", // -
                "e0" => "c595", // ŕ
                "c0" => "c594", // Ŕ
                "b4" => "c2b4" // ´
            ];

    }
    
    /**
     * @param $str String which will be converted
     * @return string
     */
    public static function utf8ToWindows1250($str) {
        $codePage = array_flip(self::charactersWINDOWS1250UTF8());
        $ret = '';
        $len = mb_strlen($str,"UTF-8");
        for($i=0;$i<$len;$i++) {
            $charUTF8 = mb_substr($str,$i,1,"UTF-8");
            $ret .= isset($codePage[bin2hex($charUTF8)]) ? $codePage[bin2hex($charUTF8)] : bin2hex($charUTF8);
        }
        return hex2bin($ret);
    }

    /**
     * @param $str String which will be converted
     * @return string
     */
    public static function windows1250ToUtf8($str)
    {
        $codePage = self::charactersWINDOWS1250UTF8();
        $ret = '';
        $len = strlen($str);
        for($i=0;$i<$len;$i++) {
            $charW1250 = substr($str,$i,1);
            $ret .= isset($codePage[bin2hex($charW1250)]) ? $codePage[bin2hex($charW1250)] : bin2hex($charW1250);
        }
        return hex2bin($ret);
    }

}
