<?php

namespace App\Http\Controllers;

use App\Models\calculator;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function Calculate(Request $request)
    {
        $operand1 = $request->input('operand1');
        $operand2 = $request->input('operand2');
        $operator = $request->input('operator');

        // melakukan perhitungan
        $calculator = new Calculator();
        $result = $calculator->calculateResult($operand1, $operand2, $operator);

        // Menyiimpan riwayat perhitungan ke dalam database
        DB::table('calculations')->insert([
            'operand1' => $operand1,
            'operand2' => $operand2,
            'operator' => $operator,
            'result' => $result
        ]);

        return redirect()->route('calculator.index')->with('success', 'Perhitungan berhasil! Hasil: ' . $result);
    }

    public function History()
    {
        $calculations = DB::table('calculations')->orderByDesc('created_at')->get();
        return view('history', ['calculations' => $calculations]);
    }
}
