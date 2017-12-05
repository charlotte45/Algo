<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 28/11/17
 * Time: 10:18
 */

namespace Dojo;


class StrSplit
{
    public function StringToTab(string $str, int $stepNb = 1) :array
    {
        $strToTab = [];

        for($i = 0; $i < strlen($str); $i+=$stepNb) {
            $strToTab [] = $str[$i];
        }

        return $strToTab;
    }
}
