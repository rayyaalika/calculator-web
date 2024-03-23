<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculator extends Model
{
    use HasFactory;

    public function calculateResult($operand1, $operand2, $operator)
    {
        switch ($operator) {
            case '+':
                return $operand1 + $operand2;
            case '-':
                return $operand1 - $operand2;
            case '*':
                return $operand1 * $operand2;
            case '/':
                return $operand1 / $operand2;
            case '%':
                return $operand1 % $operand2;
            default:
                return null;
        }
    }
}
