<?php

declare(strict_types=1);

namespace Yuko\DddHelper\Model;

class EntityNotFoundException extends \DomainException
{
    public function getStatusCode(): int
    {
        return 404;
    }
}
