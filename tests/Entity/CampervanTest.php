<?php


namespace App\Tests\Entity;

use App\Entity\Campervan;
use PHPUnit\Framework\TestCase;

class CampervanTest extends TestCase
{

    public function testNotNull(): void
    {
        $campervan = new Campervan(1, "Bulli");
        self::assertNotNull($campervan);
    }

}
