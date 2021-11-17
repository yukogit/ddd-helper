<?php

declare(strict_types=1);

namespace Yuko\DddHelper\Model;

interface AggregateRoot
{
    public function releaseEvents(): array;
}
