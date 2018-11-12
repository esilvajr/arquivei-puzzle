<?php

namespace Arquivei\Recruiter\Modules\EventOrder\UseCases\Verificator;

use Arquivei\Recruiter\Modules\EventOrder\Responses\ResponseTrait;
use Arquivei\Recruiter\Modules\EventOrder\UseCases\Verificator\Resolvers\StatusResolver;

class UseCase
{
    use  ResponseTrait;

    public function execute(array $request)
    {
        $events = array();
        foreach ($request['events'] as $event) {

            $status = null;
            if (isset($events[$event['Data']['Number']])
                && !empty($events[$event['Data']['Number']])) {
                $status = (new StatusResolver)->resolve(
                    $events[$event['Data']['Number']]['Status'],
                    $event['Data']['Status']
                );
            }

            if (is_null($status)) {
                $status = $event['Data']['Status'];
            }

            $events[$event['Data']['Number']] = [
                "Number" => $event['Data']['Number'],
                "Status" => $status
            ];
        }

        $this->response = $events;
    }
}
