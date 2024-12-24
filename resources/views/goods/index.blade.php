<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng hàng hóa</title>
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
    <a href="{{ route('goods.insert') }}">
        <button>Thêm hàng hóa</button>
    </a>
    <h1>Danh sách hàng hóa</h1>
    @section('content')
    <!-- Hiển thị thông báo thành công -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>type</th>
                <th>price</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($goods as $goods)
            <tr>
                <td>{{ $goods->id }}</td>
                <td>{{ $goods->name }}</td>
                <td>{{ $goods->type }}</td>
                <td>{{ $goods->price }}</td>
                <td>{{ $goods->quantity }}</td>
                <td>
                    <!-- Nút xóa -->
                    <form action="{{ route('goods.destroy', $goods->id) }}" method="POST"
                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
                <td>
                    <!-- Nút Edit -->
                    <a href="{{ route('goods.edit', $goods->id) }}">
                        <button class="btn btn-primary">Sửa</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>