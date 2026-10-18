
<!DOCTYPE html>
<html>
<head>
    <title>People Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2>People List</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>About</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person['name'] }}</td>
                    <td>{{ $person['email'] }}</td>
                    <td>{{ $person['role'] }}</td>
                    <td>{{ $person['about'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
