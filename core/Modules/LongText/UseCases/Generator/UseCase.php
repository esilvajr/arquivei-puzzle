<?php

namespace Arquivei\Recruiter\Modules\LongText\UseCases\Generator;

use Arquivei\Recruiter\Modules\LongText\Responses\ResponseTrait;
use Faker\Factory;

class UseCase
{
    use ResponseTrait;

    public function execute()
    {
        $faker = Factory::create();
        $words = array();

        foreach (range(0, 300) as $range) {
            unset($range);
            $words[] = $faker->firstName;
        }

        $this->response = $words;
    }
}
