<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements PontuavelInterface, AssistivelInterface
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return sprintf('http://videos.alura.com.br/%s/%s',
            (new Slug($this->categoria))->__toString(),
            (new Slug($this->nome))->__toString()
        );
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
