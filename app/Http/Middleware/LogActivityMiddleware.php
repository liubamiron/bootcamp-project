<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Http\Request;
use App\Services\RequestActivityLoggerInterface;


  class LogActivityMiddleware {

    private RequestActivityLoggerInterface $logger;
 
    
    public function __construct(RequestActivityLoggerInterface $logger)
   {
       $this->logger = $logger;
   }
   // param Request $request
   // param Closure $next
   // param string|null $type
     
   public function handle($request, Closure $next, ?string $type = null)
   {
  

        $this->logger->logRequest($request, $type ?? 'unknown page');
        
        return $next ($request);
       }
   
   } 