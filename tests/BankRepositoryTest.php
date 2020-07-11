<?php declare(strict_types=1);

namespace UaOpenData\Tests;

use PHPUnit\Framework\TestCase;
use UaOpenData\BankRepository;

class BankRepositoryTest extends TestCase
{
    public function testSingleton(): void
    {
        $instance = BankRepository::instance();
        $this->assertTrue($instance === BankRepository::instance());
    }

    public function testBank(): void
    {
        $banks = BankRepository::instance()->db();
        foreach ($banks as $bin => $bank) {
            $this->assertEquals(BankRepository::instance()->bank($bin), $bank);
        }
    }
}
