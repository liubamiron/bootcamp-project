<?php

namespace App\Services;

use Illuminate\Http\Request;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        $name = $request->name;
        $email = $request->email;
        $department = $request->department;
        $urlWithQueryString = $request->fullUrl();


        return [
            'url' . $urlWithQueryString,
            'name is: ' .$name,
            'email is' . $email,
            'department is' . $department,
        ];

    }

    
}