<?php

namespace Arquivei\Recruiter\Modules\EventOrder\UseCases\Verificator\Resolvers;

class StatusResolver
{
    public function resolve(string $actual, string $new): string
    {
        if ($actual == 'cancelled' && $new == 'cancelled') {
            return $actual;
        }

        if ($actual == 'cancelled' && $new == 'authorized') {
            return $actual;
        }

        if ($actual == 'cancelled' && $new == 'denied') {
            return $actual;
        }

        if ($actual == 'denied' && $new == 'denied') {
            return $actual;
        }

        if ($actual == 'denied' && $new == 'cancelled') {
            return $actual;
        }

        if ($actual == 'denied' && $new == 'authorized') {
            return $actual;
        }

        if ($actual == 'authorized') {
            return $new;
        }

        return $new;
    }
}
