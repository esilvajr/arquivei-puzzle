<?php

namespace Arquivei\Recruiter\Modules\EventOrder\UseCases\Generator;

use Arquivei\Recruiter\Modules\EventOrder\Responses\ResponseTrait;
use Arquivei\Recruiter\Modules\EventOrder\UseCases\Generator\Resolvers\StatusResolver;
use Faker\Factory;

class UseCase
{
    use  ResponseTrait;

    public function execute()
    {
        $faker = Factory::create("pt_BR");
        $events = array();
        foreach (range(0,10) as $range) {
            $events[$range] = [
                "SchemaVersion" => sprintf("%s.%s.%s", $faker->numberBetween(1, 2), $faker->numberBetween(1, 20), $faker->numberBetween(1, 100)),
                "Data" => [
                    "Number" => $faker->numberBetween(1, 3),
                    "Status" => (new StatusResolver)->resolve($faker->numberBetween(0, 2))
                ]
            ];
        }

        $this->response = $events;
    }
}
