<?php

namespace App\Http\Controllers;

use App\Models\Imobil;
use App\Services\ModelLogger;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index($imobilId, Request $request, ModelLogger $logger)
    {

        $imobil = Imobil::findOrFail($imobilId);

        $logger->logModelItem($user = $request->user(), $imobil);

        return view('imobils.test', ['imobil' => $imobil]);
    }

}
