<?php

namespace App\Services;

use Illuminate\Http\Request;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return [$request->email,
        $request->department,
        $request->name, 
        $request->type,
        $request->districts, 
        $request->department, 
        $request->message ];


        
    }
}