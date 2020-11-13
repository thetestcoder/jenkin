<?php


class ValidatePassword
{
    const MIN_LENGTH = 6;
    const MAX_LENGTH = 20;

    public function validLength($password)
    {
       $passLength = strlen($password);

       return $passLength >= self::MAX_LENGTH && $passLength <= self::MAX_LENGTH;
    }
}