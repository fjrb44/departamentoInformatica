<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.5 Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <div class="container">
        <h1>Laravel 5.5 Ajax Request example</h1>

        <form >

            <div class="form-group">
                <strong>Texto:</strong>
                <input type="text" name="texto" class="form-control" placeholder="text" required="">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>

    <script src= {{ url("./js/ajax.js") }}></script>
</body>
</html>
