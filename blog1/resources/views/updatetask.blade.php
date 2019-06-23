<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
</head>
<body>
    <div class="container">
    <form method="post" action="/updatetask" >
            {{csrf_field()}}
            <input type="text" value="{{$result->task}}" name ="task" class="form-control" >
            <input type="hidden" name="id" value="{{$result->id}}">
            <br>
            <input type="submit" class="btn btn-primary" value ="update">
            <input type="button" class="btn btn-warning" value ="cancel">
    </form>
    </div>
</body>
</html>