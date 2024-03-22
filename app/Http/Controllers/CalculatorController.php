<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $operand1 = $request->input('operand1');
        $operand2 = $request->input('operand2');
        $operator = $request->input('operator');

        // Lakukan perhitungan
        switch ($operator) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
            case '/':
                $result = $operand1 / $operand2;
                break;
            default:
                $result = null;
        }

        // Simpan riwayat perhitungan ke dalam database
        DB::table('calculations')->insert([
            'operand1' => $operand1,
            'operand2' => $operand2,
            'operator' => $operator,
            'result' => $result
        ]);

        return redirect()->route('calculator.index')->with('success', 'Perhitungan berhasil! Hasil: ' . $result);
    }

    public function history()
    {
        $calculations = DB::table('calculations')->orderByDesc('created_at')->get();
        return view('history', ['calculations' => $calculations]);
    }
}
