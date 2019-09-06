<?php


namespace BABA\Utils;


/**
 * Class StringConvert
 * @package BABA\Utils
 * @author Juraj Puchký - BABA Tumise s.r.o. <info@baba.bj>
 */
class StringConvert
{

    /**
     * @param $str String which will be converted
     * @return string
     */
    public static function utf8ToWindows1250($str) {
        $str = str_replace('Ăˇ','á',$str);
        $str = str_replace('Ă©','é',$str);
        $str = str_replace('Ä›','ě', $str);
        $str = str_replace('Ă­','í',$str);
        $str = str_replace('Ă˝','ý',$str);
        $str = str_replace('Ăł','ó',$str);
        $str = str_replace('Ăş','ú',$str);
        $str = str_replace('ĹŻ','ů',$str);

        $str = str_replace('Ĺľ','ž',$str);
        $str = str_replace('Ĺˇ','š',$str);
        $str = str_replace('ÄŤ','č',$str);
        $str = str_replace('Ĺ™','ř',$str);
        $str = str_replace('ÄŹ','ď',$str);
        $str = str_replace('ĹĄ','ť',$str);
        $str = str_replace('Ĺ?','ň',$str);

        $str = str_replace('Ă?','Á',$str);
        $str = str_replace('Ă‰','É',$str);
        $str = str_replace('Äš','Ě', $str);
        $str = str_replace('ĂŤ','Í',$str);
        $str = str_replace('Ăť','Ý',$str);
        $str = str_replace('Ă“','Ó',$str);
        $str = str_replace('Ăš','Ú',$str);
        $str = str_replace('Ĺ®','Ů',$str);

        $str = str_replace('Ĺ˝','Ž',$str);
        $str = str_replace('Ĺ ','Š',$str);
        $str = str_replace('ÄŚ','Č',$str);
        $str = str_replace('Ĺ?','Ř',$str);
        $str = str_replace('ÄŽ','Ď',$str);
        $str = str_replace('Ĺ¤','Ť',$str);
        $str = str_replace('Ĺ‡','Ň',$str);

        return $str;
    }

}