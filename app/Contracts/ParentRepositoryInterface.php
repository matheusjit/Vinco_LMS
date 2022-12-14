<?php

declare(strict_types=1);

namespace App\Contracts;

interface ParentRepositoryInterface
{
    public function guardians();

    public function showGuardian(string $key);

    public function stored($attributes);

    public function updated(string $key, $attributes);

    public function deleted(string $key);
}
