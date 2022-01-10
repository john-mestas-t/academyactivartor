<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class CodeController extends Controller
{
    public function show()
    {
        return Code::all();
    }

    public function activate(Request $request)
    {
        $check = Code::where('code', $request->code)->first();

        if (!is_null($check)) {
            if($check->status == 1)
            {
                $mensaje = "Codigo ya registrado";
                $tipo = "caution";
            }
            else {
                $mensaje = $check;
                $tipo = "success";

                $check->status = 1;
                $check->save();
            }
        }
        else
        {
            $mensaje = "Codigo no valido";
            $tipo = "danger";
        }

        return redirect()->route("home")
            ->with("mensaje", $mensaje)
            ->with("tipo", $tipo);
    }
}
