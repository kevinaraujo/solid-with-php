<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\PontuavelInterface;

class CalculadorPontuacao
{
    public function recuperarPontuacao(PontuavelInterface $conteudo)
    {
        $conteudo->recuperaPontuacao();
    }
}
