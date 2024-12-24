<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>

<body>
    <h1>Thêm người dùng mới</h1>

    <!-- Hiển thị thông báo thành công -->
    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Hiển thị lỗi xác thực -->
    @if($errors->any())
    <ul style="color: red;">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <!-- Form insert khách hàng -->
    <form action="{{ route('users.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Tên:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <!-- <div>
            <label for="password">password:</label>
            <input type="text" name="password" id="password" value="{{ old('password') }}" required>
        </div> -->
        <div>
            <button type="submit">Thêm người dùng mới</button>
        </div>
    </form>
</body>

</html>