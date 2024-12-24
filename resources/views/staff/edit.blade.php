<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa nhân viên</title>
</head>

<body>
    <h1>Chỉnh sửa nhân viên</h1>

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

    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Tên nhân viên:</label>
            <input type="text" id="name" name="name" value="{{ $staff->name }}" required>
        </div>
        <div>
            <label for="phone">phone:</label>
            <input type="number" id="phone" name="phone" value="{{ $staff->phone }}" required>
        </div>
        <div>
            <label for="birthday">birthday:</label>
            <input type="date" id="birthday" name="birthday" value="{{ $staff->birthday }}" required>
        </div>
        <div>
            <label for="email">email:</label>
            <input type="text" id="email" name="email" value="{{ $staff->email }}" required>
        </div>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>