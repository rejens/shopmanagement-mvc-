<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select name="select" id="">
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select>

    <button type="input">submit</button>
</body>

<script>
    document.querySelector("select").addEventListener("click", function() {
        document.querySelector("button").setAttribute("disabled", "disabled")
    })
</script>

</html>