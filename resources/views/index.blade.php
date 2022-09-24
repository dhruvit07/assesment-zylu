<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zylu Assesment</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div class="container" style="padding:5% 2%; display:flex; align-items:center; justify-content:center;">
        <table id="table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Hire Date</th>
                    <th>Active</th>
                    <th>Flag</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->phone_no }}</td>
                    <td>{{ $employee->job }}</td>
                    <td>{{ $employee->work_department->name }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ date('d-m-Y',strtotime($employee->hire_date)) }}</td>
                    @if($employee->is_active)
                    <td class="">Active</td>
                    @else
                    <td class="">Un-Active</td>
                    @endif
                    @if ((abs(strtotime($employee->hire_date) - strtotime($date))/60/60/24/365) > 5 &&
                    $employee->is_active)
                    <td class="table-success">Green</td>
                    @else
                    <td class="table-danger">Red</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
</body>

</html>