<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\LoggableInterface;
use App\Models\Imobil;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return (array)$request->all(
            'ip', 'bearerToken', 'fillUrl', 'name','email', 'type', 'districts', 'department','message');
        
    }
    
    
}