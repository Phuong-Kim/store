<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
</head>

<body>
    <h1>Thêm nhân viên mới</h1>

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
    <form action="{{ route('staff.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Tên nhân viên:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="phone">phone:</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>
        <div>
            <label for="birthday">birthday:</label>
            <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}" required>
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="photo">Chọn hình ảnh:</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>
        </div>
        <div>
            <label for="video">Video:</label>
            <input type="file" name="video" id="video" accept="video/*">
        </div>
        <div>
            <button type="submit">Thêm nhân viên</button>
        </div>
    </form>
</body>

</html>