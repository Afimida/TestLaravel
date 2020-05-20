<?php

namespace App\Services\Validator\Core;

interface ValidateData
{
    public function validate(array $data): string;

    public function checkName(string $name): string;

    public function checkEmail(string $email): string;

    public function checkMessage(string $message): string;

    public function checkFile(string $file): string;
}
