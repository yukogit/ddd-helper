<?php

declare(strict_types=1);

namespace Yuko\DddHelper\Model;

interface Flusher
{
    public function flush(AggregateRoot ...$root): void;
}
