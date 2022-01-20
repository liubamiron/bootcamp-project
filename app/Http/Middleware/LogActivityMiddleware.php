<?php

namespace App\Http\Middleware;

// use App\Models\User;
use App\Services\UserReprsenetationTrait;
use Closue;
use Illuminate\Http\Request;
use App\Services\DummyRequestActivityLogger;

class LogActivityMiddleware {

     use UserRepresentationTrait;

    private DummyRequestActivityLogger $logger;

    public function __construct(DummyRequestActivityLogge $logger)
    {
        $this->logger = $logger;
    }
      
    public function handle($request, Closure $next, ?string $type = null)
    {
   
         $this->logger->logRequest($request, $type ?? 'uknown page');

    return $next ($request);
    }

}