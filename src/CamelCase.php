<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 30/11/17
 * Time: 10:46
 */

namespace Algo;


class CamelCase
{
    public function transformSnakeCaseToCamelCase(string $input, $delimiter)
    {
        for($i = 0; $i <= $input; $i++) {
            if($i == " ") {
                $input = str_replace(" ", $delimiter, $input);
            }
        }

        $words = explode($delimiter, $input);
        $result = "";
        foreach($words as $word) {
            $result .= ucfirst($word);
        }

        return lcfirst($result);
    }
}