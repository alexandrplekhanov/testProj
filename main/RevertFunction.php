<?php

class RevertFunction
{
    public static function revertCharacters($str) {
        $result = '';
        $str = preg_split('/([.,!-:;\s])/u', $str, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        foreach ($str as $word) {
            $result .= strrev($word);
        }
        return $result;
    }
}



