<?php

namespace Jolicht\DogadoId;

use Ramsey\Uuid\Uuid;
use Webmozart\Assert\Assert;

abstract class AbstractId implements Id
{
    final protected function __construct(
        private readonly string $id
    ) {
    }

    public static function create(): self
    {
        return new static(Uuid::uuid4()->toString());
    }

    public static function fromString(string $id): static
    {
        Assert::uuid($id, 'String is no valid uuid.');

        return new static($id);
    }

    public function toString(): string
    {
        return $this->id;
    }
}
