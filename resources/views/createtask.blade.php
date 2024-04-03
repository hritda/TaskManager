<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body class="antialiased">
    <div>
<form method = "post" action="{{route('saveTask')}}" accept-charset = "UTF-8">
                {{csrf_field()}}
            <div>
        <label for="taskTitle">Task Title:</label>
        <input type="text" id="taskTitle" name="taskTitle" required><br>
    </div>
    <br>
    <div>
        <label for="taskDescription">Task Description:</label>
        <textarea id="taskDescription" name="taskDescription" required></textarea>
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>

            </form>
</div>
</body>
</html>