<?php

namespace App\Http\Controllers;

use App\Models\Imobil;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

class ItemController extends Controller
{

    public function index($imobilId, Request $request, LoggerInterface $logger)
    {

        $imobil = Imobil::findOrFail($imobilId);

        $user = $request->user();
        $userRepresentation = $user ? "User with id {$user->id}" : "Uknown User";
        $logger->info(
            $userRepresentation . ' accesed ' . "imobil with {$imobilId}",
            ['id' => $imobilId,
                'price' => $imobil->price], );

        return view('imobils.test', ['imobil' => $imobil]);
    }

}
