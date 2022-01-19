<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Services\UserReprsenetationTrait;
use Closue;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class LogActivityMiddleware {

    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
      
    public function handle($request, Closure $next, ?string $type = null)
    {
   

        $user=$request->getUser();
        $userRepresentation = $user ? "User with id {$user->id}" : 'Uknown User';

        

        $this->logger->debug(
            $userRepresentation . 'made a request to' . ($type ?? 'uknown page'),
            ['data placeholder']
        );


    return $next ($request);
    }

}