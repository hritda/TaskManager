<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form method = "post"  action = "{{route('handleUpdate',$task->id)}}" accept-charset = "UTF-8">
                {{csrf_field()}}
            <div>
        <label for="taskTitle" value="{{$task}}" >Task Title:</label>
        <input type="text" value = "{{$task->title}}" id="taskTitle" name="taskTitle" requ1ired><br>
   
    </div>
    <br>
    <div>
    <input type="text" value = "{{$task}}" id="taskTitle" name="taskTitle" required><br>
        <label for="taskDescription">Task Description:</label>
        <textarea id="taskDescription" value="{{$task->description}}" name="taskDescription" required>{{$task->description}}</textarea>
    </div>
    <br>
    <div>
        <button type="submit">Update</button>
    </div>

            </form>
</body>
</html>