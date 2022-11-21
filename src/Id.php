<?php

namespace Jolicht\DogadoId;

interface Id
{
    public function toString(): string;

    public static function fromString(string $id): static;
}
