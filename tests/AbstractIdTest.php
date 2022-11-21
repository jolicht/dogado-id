<?php

namespace Jolicht\DogadoId\Tests;

use Jolicht\DogadoId\Id;
use Jolicht\DogadoId\Tests\_files\ConcreteId;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Jolicht\DogadoId\AbstractId
 */
class AbstractIdTest extends TestCase
{
    public function testCreate(): void
    {
        $id = ConcreteId::create();
        $this->assertInstanceOf(ConcreteId::class, $id);
        $this->assertInstanceOf(Id::class, $id);
    }

    public function testToString(): void
    {
        $id = ConcreteId::fromString('8ebdeb17-56d9-4136-9350-633783a4434b');
        $this->assertSame('8ebdeb17-56d9-4136-9350-633783a4434b', $id->toString());
    }

    public function testFromString(): void
    {
        $id = ConcreteId::fromString('8ebdeb17-56d9-4136-9350-633783a4434b');
        $this->assertInstanceOf(ConcreteId::class, $id);
    }
}
