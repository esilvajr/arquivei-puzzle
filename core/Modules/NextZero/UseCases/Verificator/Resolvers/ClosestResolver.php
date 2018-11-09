<?php

namespace Arquivei\Recruiter\Modules\NextZero\UseCases\Verificator\Resolvers;

class ClosestResolver
{
    public function resolve(array $values): int
    {
        for ($temp = 1; $temp <= 5526; $temp++)
        {
            if (in_array($temp, $values)) {
                return ("$temp");
            }

            if (in_array(-$temp, $values)) {
                return ("-$temp");
            }
        }
        return 0;
    }
}
