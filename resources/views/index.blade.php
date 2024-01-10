<!-- resources/views/summary/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyRhsl5pm/K28G4UJgA6yIYIBF1BbKt6" crossorigin="anonymous">
    <title>Employee Summary</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Employee Summary</h2>

        <p class="mb-2">Count of Male Employees: {{ $maleCount }}</p>
        <p class="mb-2">Count of Female Employees: {{ $femaleCount }}</p>
        <p class="mb-2">Average Age of Employees: {{ $averageAge }}</p>
        <p class="mb-2">Total Monthly Salary of Employees: ${{ $totalSalary }}</p>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-c2hXYW1EGz2HA4uow/dfbdcg18RV0VJ2YxNflFzqJ7Xz7e3dEzvWtrJt7Z4jz0c" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyRhsl5pm/K28G4UJgA6yIYIBF1BbKt6" crossorigin="anonymous"></script>
</body>
</html>
