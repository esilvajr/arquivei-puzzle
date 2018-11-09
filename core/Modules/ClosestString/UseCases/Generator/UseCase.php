<?php

namespace Arquivei\Recruiter\Modules\ClosestString\UseCases\Generator;

use Arquivei\Recruiter\Modules\ClosestString\Responses\ResponseTrait;

class UseCase
{
    use ResponseTrait;

    public function execute()
    {
        $presidents = [
            "Marechal Manuel Deodoro da Fonseca",
            "Marechal Floriano Vieira Peixoto",
            "Prudente José de Morais Barros",
            "Manuel Ferraz de Campos Sales",
            "Francisco de Paula Rodrigues Alves",
            "Afonso Augusto Moreira Pena",
            "Nilo Peçanha",
            "Marechal Hermes Rodrigues da Fonseca",
            "Wenceslau Brás Pereira Gomes",
            "Delfim Moreira da Costa Ribeiro",
            "Epitácio da Silva Pessoa",
            "Authur da Silva Bernardes",
            "Washington Luís Pereira de Sousa",
            "Getúlio Dorneles Vargas",
            "General Eurico Gaspar Dutra",
            "Getúlio Dorneles Vargas",
            "João Café Filho",
            "Juscelino Kubitschek de Oliveira",
            "Jânio da Silva Quadros",
            "João Belchior Marques Goulart",
            "Marechal Humberto de Alencar Castello Branco",
            "Marechal Arthur da Costa e Silva",
            "General Emílio Garrastazu Médici",
            "General Ernesto Geisel",
            "General João Baptista de Oliveira Figueiredo",
            "José Sarney",
            "Fernando Afonso Collor de Melo",
            "Itamar Augusto Cautiero Franco",
            "Fernando Henrique Cardoso",
            "Luiz Inácio Lula da Silva",
            "Dilma Vana Rousseff",
            "Michel Temer"
        ];

        $presidentIndexOf = array_rand($presidents, 1 );

        $length = strlen($presidents[$presidentIndexOf]);
        $len = ($length / 2);

        if ($len < 1) {
            $len = 1;
        }
        $word = substr($presidents[$presidentIndexOf], $len, $length - $len);

        $word = trim(strtolower($word));

        $this->response = [
            'word' => $word,
            'word-list' => $presidents
        ];
    }
}
