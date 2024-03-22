<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .background-container {
            background-color: #f0f0f0; 
            padding: 20px; 
            border-radius: 10px; 
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 background-container">
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
</html>
