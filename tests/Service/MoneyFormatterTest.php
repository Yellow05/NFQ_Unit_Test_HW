<?php
/**
 * Created by PhpStorm.
 * User: liudas
 * Date: 18.5.17
 * Time: 23.34
 */

namespace App\Tests\Service;


use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    public function testEur()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('formatNumber')
            ->willReturn('530K');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);

        $result = $moneyFormatter->formatEur(0);
        $this->assertEquals('530K €', $result);
    }

    public function testUsd()
    {
        /** @var NumberFormatter|MockObject $numberFormatterMock */
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->once())
            ->method('formatNumber')
            ->willReturn('10.15M');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);

        $result = $moneyFormatter->formatUSD(0);
        $this->assertEquals('$10.15M', $result);
    }
}
