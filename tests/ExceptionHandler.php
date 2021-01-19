<?php

namespace Tests;

use Throwable;
use App\Exceptions\Handler;

class ExceptionHandler extends Handler
{
    public function render($request, Throwable $e)
    {
        if (!in_array(get_class($e), $this->dontReport)) {
            throw $e;
        }

        return parent::render($request, $e);
    }
}
