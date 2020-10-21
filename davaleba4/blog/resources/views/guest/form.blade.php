<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('test_form') }}" method="POST" style="
    font-size: 22px;
    font-weight: bold;
    ">
        @csrf
        name <br>
        <input type="text" name='name'><br>
        lastname <br>
        <input type="text" name='lastname'><br>
        address <br>
        <input type="text" name='address'><br>
        bio <br>
        <textarea name="bio" id="" cols="25" rows="5"></textarea><br>
        birthdate <br>
        <input type="date" name="date"><br>
        <button>submit</button>
    </form>
</body>
</html>