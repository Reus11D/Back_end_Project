<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Become a member</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/GoFreestyle.png">
    <!-- Optional theme -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <style>

        .container {

            margin-top:2%;

        }
        .contact-form .form-group {
    margin-bottom: 20px;
}
.form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.form-control {
    border-color: #e2c705;
}
.form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}

    </style>

</head>

<body>

@if (count($errors) > 0)

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<div class="container">

    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8"><h1>Hello! For join to our Academy please send your video where you do skills</h1><br><h2>Upload your video</h2>

        </div>

    </div>

    <br>

    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form action="/fileupload_page" method="post" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label for="Product Name">Your Name</label>

                    <input type="text" name="name" class="form-control"  placeholder="Name" >

                </div>
                <div class="form-group">

                    <label for="Product Name">Your Surname</label>

                    <input type="text" name="surname" class="form-control"  placeholder="Surname" >

                </div>
                <div class="form-group">

                    <label for="Product Name">Your Email</label>

                    <input type="text" name="email" class="form-control"  placeholder="Email" >

                </div>

                <label for="Product Name">Your video:</label>

                <br />

                <input type="file" class="form-control" name="photos[]" multiple />

                <br /><br />

                <input type="submit" class="btn btn-primary" value="Upload" />

            </form>

        </div>

    </div>

</div>

</body>

</html>
