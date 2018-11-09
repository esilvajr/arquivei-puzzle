<?php

namespace Arquivei\Recruiter\Modules\NextZero\UseCases\Verificator;

use Arquivei\Recruiter\Modules\NextZero\Responses\ResponseTrait;
use Arquivei\Recruiter\Modules\NextZero\UseCases\Verificator\Resolvers\ClosestResolver;

class UseCase
{

    use ResponseTrait;

    public function execute(array $request)
    {
        $value = array();

        foreach ($request as $item) {
            $resolver = new ClosestResolver();
            $value[] = $resolver->resolve($item);
        }

        $values = implode("", $value);

        $this->response = sha1($values);
    }
}
