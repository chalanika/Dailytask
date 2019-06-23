<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rakiyawa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
    
    <div class="container">
    <div class="text-center">
        <h1 >Daily task</h1>
       <div class="row">
        <div class="col-md-12">
            @foreach($errors->all() as $err)

                <div class ="alert alert-danger" role='altert'>
                    {{$err}}
                </div>
            @endforeach

            <form method="post" action="/saveTask" >
            {{csrf_field()}}
            <input type="text" name ="task" class="form-control" placeholder="Enter your task">
            <br>
            <input type="submit" class="btn btn-primary" value ="save">
            <input type="button" class="btn btn-warning" value ="clear">
            </form>
        
        </div>
       </div>
       <table class="table table-dark">
            <th>ID</th>
            <th>Task</th>
            <th>Completed</th>
            <th>Action</th>
            <th>Delete</th>
            <th>Update</th>
            @foreach($tasks as $task)
                <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->task}}</td>
                <td>
                @if($task->iscompleted)
                <button class="btn btn-success">Complited</button>
                @else
                <button class="btn btn-warning">Not Complited</button>
                @endif
                </td>
                <td>
                @if(!$task->iscompleted)
                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as complited</a>
                @else
                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark as Not complited</a>
                @endif
                </td>
                <td>
                <a href="/delete/{{$task->id}}" class ="btn btn-danger">Delete</a>
                </td>
                <td>
                <a href="/update/{{$task->id}}" class ="btn btn-warning">Update</a>
                </td>
                </tr>
            @endforeach

       </table>
       </div>
       </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>