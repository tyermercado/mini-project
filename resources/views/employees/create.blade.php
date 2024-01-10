<!-- resources/views/employees/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyRhsl5pm/K28G4UJgA6yIYIBF1BbKt6" crossorigin="anonymous">
    <title>Create Employee</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Add Employee</h2>

        <form action="{{ route('employees.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" name="gender" required>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <div class="form-group">
                <label for="monthly_salary">Monthly Salary:</label>
                <input type="number" class="form-control" name="monthly_salary" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>

        <a href="{{ route('employees.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-c2hXYW1EGz2HA4uow/dfbdcg18RV0VJ2YxNflFzqJ7Xz7e3dEzvWtrJt7Z4jz0c" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyRhsl5pm/K28G4UJgA6yIYIBF1BbKt6" crossorigin="anonymous"></script>
</body>
</html>
