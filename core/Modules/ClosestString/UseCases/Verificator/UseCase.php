<?php

namespace Arquivei\Recruiter\Modules\ClosestString\UseCases\Verificator;

use Arquivei\Recruiter\Modules\ClosestString\Responses\ResponseTrait;

class UseCase
{

    use ResponseTrait;

    public function execute(array $request)
    {
        $actual = [
            'word' => null,
            'percent' => 0
        ];

        foreach ($request['word-list'] as $word) {
            $percent = similar_text($word, $request['word']);

            if ($percent > $actual['percent']) {
                $actual['word'] = $word;
                $actual['percent'] = $percent;
            }
        }

        $this->response = $actual['word'];
    }
}
