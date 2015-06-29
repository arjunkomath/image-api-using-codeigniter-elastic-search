<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image API using elastic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Image API using Elastic <small>techulus.com</small></h1>
        </div>
    <div class="alert alert-success" role="alert">Upload Succesful!</div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Image URL :</h2>
            <input type="text" class="form-control input-lg" value="<?= base_url().'api/'.$key ?>">
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
