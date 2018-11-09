<?php

namespace Arquivei\Recruiter\Modules\NextZero\UseCases\Generator;

use Arquivei\Recruiter\Modules\NextZero\Responses\ResponseTrait;

class UseCase
{
    use ResponseTrait;

    public function execute()
    {
        $pattern = array();

        for ($i = 0; $i < 5; $i++) {
            $items = array();
            for ($j = 0; $j < 5; $j++) {
                $items[$j] = random_int(-273, 5526);
            }
            array_push($pattern, $items);
        }
        $this->response = $pattern;
    }
}
