<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .centered-form {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center centered-form">
            <div class="col-md-6">
                <h1 class="text-center">Calculator</h1>
                <form action="{{ route('calculator.calculate') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="operand1">Operand 1:</label>
                        <input type="text" class="form-control" name="operand1" id="operand1" required>
                    </div>
                    <div class="form-group">
                        <label for="operator">Operator:</label>
                        <select class="form-control" name="operator" id="operator" required>
                            <option value="+" selected>+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="operand2">Operand 2:</label>
                        <input type="text" class="form-control" name="operand2" id="operand2" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                </form>
                @if(session('success'))
                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif
                <div class="text-center mt-3">
                    <a href="{{ route('calculator.history') }}" class="btn btn-link">View Calculation History</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
