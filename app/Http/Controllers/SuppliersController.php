<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index() {
        $suppliers = [
        0 => ['name' => 'supplier 1',
        'status'  => "ativo",
        'cpf' => "000.000.000-00"],
        1 => [ 'name' => 'supplier 2',
        'status' => "inativo",
        'cpf' => "999.999.999-99"
        ]];

        return view('app.suppliers.index', compact('suppliers'));
    }
}
