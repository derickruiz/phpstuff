<?php

// Just a bunch of functions for the purposes of learning the PHP syntax.

class AreAnagrams {
    public static function areStringsAnagrams($a, $b) {
        if ($a === $b) {
            return true;
        } else {
            if (strpos($a, $b[0]) !== false) {
                return self::areStringsAnagrams(preg_replace("/" . $b[0] . "/", "", $a, 1), substr($b, 1));
            }
        }
        return false;
    }
}

echo AreAnagrams::areStringsAnagrams('neural', 'unreal') ? 'True' : 'False';