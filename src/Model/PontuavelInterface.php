<?php

namespace Alura\Solid\Model;

interface PontuavelInterface
{
    public function recuperarPontuacao(): int;
    public function assistir(): void;
}