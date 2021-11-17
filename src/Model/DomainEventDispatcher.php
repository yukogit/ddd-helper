<?php

declare(strict_types=1);

namespace Yuko\DddHelper\Model;

interface DomainEventDispatcher
{
    public function dispatchAll(array $events): void;
    public function dispatch(object $event): void;
}
