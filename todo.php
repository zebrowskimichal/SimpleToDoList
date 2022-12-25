<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE TODO</title>
</head>
<body onload="load_tasks();">
    <div class="container">
        <h1 class="baner">Simple To Do List</h1>
        <hr>
        <section id="tasklist"></section>
        <hr>
        <input type="text" name="new_todo" id="new_todo"><input type="button" onclick="add_entry(new_todo.value);" value="Add">
    </div>
    <script src="scripts.js"></script>
</body>
</html>