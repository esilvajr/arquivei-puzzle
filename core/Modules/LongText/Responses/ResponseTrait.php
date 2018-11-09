<?php

namespace Arquivei\Recruiter\Modules\LongText\Responses;

trait ResponseTrait
{
    protected $response;

    /**
     * using php without typing is more easy in here because we don't need any entity or interface classes.
     */
    public function getResponse()
    {
      return $this->response;
    }
}
