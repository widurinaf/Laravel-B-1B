<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <title>Show Data</title>
</head>
<body style="padding: 80px">
    <div class="container">
        <h1> CONTACT US</h1> <br>
        <form action="{{ URL::to('/addContact') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <label for="email">First Name</label>
                        <input class="form-control" type="text" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Last Name</label>
                        <input class="form-control" type="text" name="last_name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Telp. No</label>
                        <input class="form-control" type="number" name="phone" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 row">
                    <div class="col-md-12">
                        <label for="email">Message</label>
                        <textarea class="form-control" type="text" name="message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="Add Message"> <br>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>