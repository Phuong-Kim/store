<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa hàng hóa</title>
</head>

<body>
    <h1>Chỉnh sửa hàng hóa</h1>

    <!-- Hiển thị lỗi xác thực -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('goods.update', $goods->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Tên hàng hóa:</label>
            <input type="text" id="name" name="name" value="{{ $goods->name }}" required>
        </div>
        <div>
            <label for="type">Loại:</label>
            <input type="text" id="type" name="type" value="{{ $goods->type }}" required>
        </div>
        <div>
            <label for="price">Giá:</label>
            <input type="number" id="price" name="price" value="{{ $goods->price }}" required>
        </div>
        <div>
            <label for="quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity" value="{{ $goods->quantity }}" required>
        </div>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>