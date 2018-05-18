<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.5.17
 * Time: 22.14
 */

namespace App\Service;


class NumberFormatter
{
    public function formatNumber($number)
    {
        if(abs($number) > 0 && abs($number) < 999.5)
        {
            $number = round($number, 2);
        }

        if(abs($number) < 99950 && abs($number) >= 999.5)
        {
            $number = number_format((float)$number, 0, '.', ' ');
        }

        if(abs($number) < 995000 && abs($number) >= 99950)
        {
            $number = round($number/1000).'K';
        }

        if(abs($number) >= 995000)
        {
            $number = number_format((float)$number/1000000, 2, '.', '').'M';
        }

        return $number;
    }
}
