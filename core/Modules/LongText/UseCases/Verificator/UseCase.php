<?php

namespace Arquivei\Recruiter\Modules\LongText\UseCases\Verificator;

use Arquivei\Recruiter\Modules\LongText\Responses\ResponseTrait;

class UseCase
{
    use ResponseTrait;

    public function execute(array $request)
    {
        $smallWords = array();
        foreach ($request as $word) {
            if (strlen($word) <= 3) {
                $smallWords[] = strtolower($word);
            }
        }

        $this->response = implode('-', $smallWords);
    }
}
