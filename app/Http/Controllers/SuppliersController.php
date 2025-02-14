<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index() {
        $suppliers = [
            0 => ['name' => 'supplier 1', "status"  => "ativo"]];

        return view('app.suppliers.index', compact('suppliers'));
    }
}
