<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>
                #
            </th>
            <th>
                name
            </th>
            <th>
                lastname
            </th>
            <th>
                address
            </th>
            <th>
                bio
            </th>
            <th>
                birthdate
            </th>
            @foreach ($data as $data)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['lastname'] }}</td>
                    <td>{{ $data['address'] }}</td>
                    <td>{{ $data['bio'] }}</td>
                    <td>{{ $data['date'] }}</td>
                </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>