<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\LoggableInterface;
use App\Models\Imobil;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        // return ['dummy debug data'];
        // return (array)$request['id'];

        $ipAddress = $request->ip();
        $token = $request->bearerToken();
        $urlWithQueryString = $request->fullUrl();


        $name = $request->name;
        $email = $request->email;
        $department = $request->department;
        $type = $request->type;
        $districts = $request->districts; 
        $department = $request->department;
        $message = $request->message;


        return [
            'url' . $urlWithQueryString,
            'name is: ' .$name,
            'email is' . $email,
            'ip Address is: ' .$ipAddress,
            'token is: ' .$token,
            'department is' . $department,
            'name is' . $name,
            'type' . $type,
            // 'districts' .$districts,
            'department' .$department,
            'message' .$message,
        ];
        
    }
    
    
}