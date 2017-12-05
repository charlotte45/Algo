<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 30/11/17
 * Time: 10:05
 */

namespace Algo;


class Ucwords
{
    public function transformFirstCharacterToUpper(string $input, string $delimiter ) :string
    {
        $words = explode($delimiter, $input);
        $result = "";
        foreach($words as $word) {
            $result .= ucfirst($word) . $delimiter;
        }

        return rtrim($result, $delimiter);
    }
}