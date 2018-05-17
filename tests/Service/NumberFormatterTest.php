<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.5.17
 * Time: 22.22
 */

namespace App\Tests\Service;


use App\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{

    public function getTestData()
    {
        return [
            [995000.51, "1.00M"],
            [1955000.111, "1.96M"],
            [5194400, "5.19M"],
            [99990000.9, "99.99M"],
            [535216.0, "535K"],
            [99950.099, "100K"],
            [994900, "995K"],
            [9900.91, "9901"],
            [1999.91, "2000"],
            [999.01, "999.01"],
            [0.019, "0.02"],
            [5.89631, "5.90"],
            [-1955000.111, "-1.96M"],
            [-535216.0, "-535K"],
            [-9900.91, "-9901"],
            [-5.89631, "-5.90"],
            [1.000, "1"],
            [1.9999, "2"],
            [0.000, "0"],
        ];
    }

    /**
     * @param $number
     * @param $expected
     * @dataProvider getTestData
     */
    public function testNumberFormatter($number, $expected)
    {
        $numberFormatter = new numberFormatter();
        $result = $numberFormatter->formatNumber($number);
        $this->assertEquals($expected, $result);
    }
}
