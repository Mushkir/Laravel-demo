<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Users</title>
</head>

<body>

    <h3>User List</h3>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->phone }}</td>
                    <td> <a href="/edit/{{ $user->id }}">Edit</a> </td>
                    <td> <a href="/delete/{{ $user->id }}">Delete</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
