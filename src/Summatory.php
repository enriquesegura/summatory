<?php
/**
 * Created by PhpStorm.
 * User: Enrique
 * Date: 14/09/2016
 * Time: 19:39
 */

namespace EnriqueSegura;


class Summatory
{
    public function array_sum(array $numbers)
    {
        return count($numbers) ? array_pop($numbers) + array_sum($numbers) : 0;
    }

}