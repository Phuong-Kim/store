<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hàng hóa</title>
</head>

<body>
    <h1>Thêm hàng hóa mới</h1>

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
    <form action="{{ route('goods.save') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Tên hàng hóa:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="type">type:</label>
            <input type="text" name="type" id="type" value="{{ old('type') }}" required>
        </div>
        <div>
            <label for="price">price:</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label for="quantity">quantity:</label>
            <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}" required>
        </div>
        <div>
            <button type="submit">Thêm hàng hóa</button>
        </div>
    </form>
</body>

</html>