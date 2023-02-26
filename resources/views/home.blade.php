<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY TO-DO LIST</title>
    
    <!-- FONT -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

    <!-- STYLE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.3/mdb.min.js"></script>

</head>

<body class="antialiased">
    <!-- CONTAINER TO ADD NEW ITEM -->
    <div class="containter w-50 p-3 container d-flex" style="background-color: antialiased;">
            <div class="card-body">
                <h2 style="text-align: center;">MY TO-DO LIST</h2>
                <label for="">Add new task:</label>
                <form action="{{ route('store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control">
                        <button type="submit" class="btn btn-danger">Add</i></button>                      
                    </div>
                </form>
            </div>
    </div>
    </div>

        <!-- CONTAINER TO DISPLAY ALL ITEM -->
        <div class="containter w-50 p-3 container d-flex" style="background-color: antialiased;">
            <table class="table table-hover"><br>
            <thead>
                <tr>
                <th scope="col">Task</th>
                <th scope="col">Created At</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
            @foreach ($todolists->sortByDesc('created_at') as $key=> $todolist)
                <tr>
                <td >{{ $todolist->content }}</td>
                <td>{{ $todolist->created_at }}</td>
                <td><a href="{{url('delete-task/'.$todolist->id)}}" class="btn btn-danger">Delete</a></td>
                
                <td>
                    @if ($todolist->is_complete ==1)
	                <form action="{{ route('markComplete' , $todolist->id)}}" method="POST" >
                        @csrf
                        @method('put')
                        <input type="text" name="is_complete" value="1" hidden>
                        <h6><b>Completed</b></h6>
                    </form>
                    @else
                    <form action="{{ route('markComplete' , $todolist->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="is_complete" value="0" hidden>
                        <button type="submit" class="btn btn-success">Mark as Completed</button>
                    </form>
                    @endif
                </td>

                </tr>
            @endforeach
            </tbody>
            </table>
            <br>
        </div>
    </div>
  
</body>
</html>