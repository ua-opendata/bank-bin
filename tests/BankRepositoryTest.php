<?php declare(strict_types=1);

namespace UaOpenData\Tests;

use PHPUnit\Framework\TestCase;
use UaOpenData\BankRepository;

class BankRepositoryTest extends TestCase
{
    public function bankDataProvider(): \Generator
    {
        $banks = BankRepository::instance()->db();
        foreach($banks as $bin => $bank) {
            yield [$bin, $bank];
        }
    }

    /**
     * @dataProvider bankDataProvider
     */
    public function testBank(int $bin, string $bank): void
    {
        $this->assertEquals(BankRepository::instance()->bank($bin), $bank);
    }

    public function testSingleton(): void
    {
        $instance = BankRepository::instance();
        $this->assertTrue($instance === BankRepository::instance());
    }
}
