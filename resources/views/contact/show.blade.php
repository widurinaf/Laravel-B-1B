<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <title>Show Data</title>
</head>
<body style="padding: 80px">
    <h1>All Message</h1>
    <br>

    <table border="1" id="tbluser" class="table table-striped table-bordered" >
        <thead>
        <tr>
            <th>No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Telp. No</th>
            <th>Message</th>
        </tr>
        </thead>
        @foreach($contact as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->first_name }} </td>
            <td>{{ $item->last_name  }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->message }}</td>
        </tr>
        @endforeach
    </table> <br>
    <form action="{{ URL::to('/create')}}">
        <input class="btn btn-primary" type="submit" value="Insert">
    </form>
    <script>
        $(document).ready(function() {
            $('#tbluser').DataTable();
        } );
    </script>
</body>
</html>