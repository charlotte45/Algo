<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 07/12/17
 * Time: 09:44
 */

namespace Algo;


class Dojohnny
{
    public function sortString(string $word):string
    {
        $letters = str_split($word);
        sort($letters);
        return implode($letters);
    }

//    public function annagram(string $input):array
//    {
//        $words = explode(" ", $input);
//        $sortWords = [];
//        $annagram = [];
//        foreach($words as $word) {
//            $sortWords[] = $this->sortString($word);
//            foreach($sortWords as $sortWord) {
//                $tabToString = implode($sortWords);
//                if(preg_match($sortWord, $tabToString)) {
//                    $annagram[] .= [$words[$sortWord]];
//                }
//            }
//        }
//        return $annagram;
//    }
}