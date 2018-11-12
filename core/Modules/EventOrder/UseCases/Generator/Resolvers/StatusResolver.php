<?php

namespace Arquivei\Recruiter\Modules\EventOrder\UseCases\Generator\Resolvers;

class StatusResolver
{
    public function resolve(int $index): string
    {
        if ($index == 0) {
            return "authorized";
        }
        if ($index == 1) {
            return "cancelled";
        }
        if ($index == 2) {
            return "denied";
        }
        return "unknown";
    }
}
