<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Nhân viên</title>
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
    <a href="{{ route('staff.insert') }}">
        <button>Thêm nhân viên</button>
    </a>
    <h1>Danh sách Nhân Viên</h1>
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
                <th>phone</th>
                <th>birthday</th>
                <th>email</th>
                <th>img</th>
                <th>video</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $staff)
            <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->phone }}</td>
                <td>{{ $staff->birthday }}</td>
                <td>{{ $staff->email }}</td>
                <td><img src="{{ asset('storage/' . $staff->photo) }}" alt="Ảnh nhân viên" width="200"></td>
                <td>
                    @if ($staff->video)
                    <video width="200" controls>
                        <source src="{{ asset('storage/' . $staff->video) }}" type="video/mp4">
                        Trình duyệt của bạn không hỗ trợ phát video.
                    </video>
                    @else
                    Không có video
                    @endif
                </td>
                <td>
                    <!-- Nút xóa -->
                    <form action="{{ route('staff.destroy', $staff->id) }}" method="POST"
                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
                <td>
                    <!-- Nút Edit -->
                    <a href="{{ route('staff.edit', $staff->id) }}">
                        <button class="btn btn-primary">Sửa</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>