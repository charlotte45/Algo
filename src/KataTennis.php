<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 05/12/17
 * Time: 10:03
 */

namespace Algo;


class KataTennis
{
    public function calculScoreSet(string $score):string
    {
        $scoreValue = [
            0 => 0,
            1 => 15,
            2 => 30,
            3 => 40,
            4 => 'win'
        ];

        $p1 = 0;
        $p2 = 0;

        for($i = 0; $i < strlen($score); $i++) {
            if($score[$i] == 1) {
                $p1 += 1;
            } elseif($score[$i] == 2) {
                $p2 += 1;
            }
        }

        $result = $scoreValue[$p1] . ", " . $scoreValue[$p2];

        return $result;
    }
}