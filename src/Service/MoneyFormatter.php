<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.5.17
 * Time: 23.31
 */

namespace App\Service;


class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number)
    {
        $number = $this->numberFormatter->formatNumber($number);
        return $number.' €';
    }

    public function formatUsd($number)
    {
        $number = $this->numberFormatter->formatNumber($number);
        return '$'.$number;
    }
}
