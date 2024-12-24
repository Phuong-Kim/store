<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <style>
        /* Ẩn form ban đầu */
        #form-insert {
            display: none;
        }
    </style>
    <script>
        // JavaScript để hiển thị/ẩn form
        function toggleForm() {
            const form = document.getElementById('form-insert');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    </script>

</head>

<body>
    <a href="{{ route('users.insert') }}">
        <button>Thêm người dùng</button>
    </a>
    <h1>Danh sách người dùng</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->password }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>