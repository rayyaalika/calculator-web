<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator and History</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background-container {
            background-color: #f0f0f0; 
            padding: 20px; 
            border-radius: 10px; 
            margin-top: 50px;
        }
        .overflow-scroll {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 background-container">
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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 background-container overflow-scroll">
                <h1 class="text-center">Calculation History</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Operand 1</th>
                            <th>Operand 2</th>
                            <th>Operator</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($calculations as $calculation)
                            <tr>
                                <td>{{ $calculation->id }}</td>
                                <td>{{ $calculation->operand1 }}</td>
                                <td>{{ $calculation->operand2 }}</td>
                                <td>{{ $calculation->operator }}</td>
                                <td>{{ $calculation->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{ route('calculator.index') }}" class="btn btn-primary">Back to Calculator</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}
