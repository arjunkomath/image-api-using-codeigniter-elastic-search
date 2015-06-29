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

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="<?= current_url() ?>" enctype='multipart/form-data'>
<fieldset>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Choose Image</label>
  <div class="col-md-4">
    <input id="filebutton" name="file" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
    <div class="col-md-4">
    </div>
  <div class="col-md-8">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Upload</button>
  </div>
</div>

</fieldset>
</form>

        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
