<?php

namespace App\Services;

//INTERFACE NEWSLETTER define um contrato para implementar na classe
interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}