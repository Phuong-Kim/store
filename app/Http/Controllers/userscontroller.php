<?php

namespace App\Http\Controllers;

use App\Models\users; // Thêm dòng này

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    //hiển thị danh sách KH
    public function index()
    {
        $users = users::all(); // Lấy tất cả khách hàng từ bảng KH
        // dd($users);// thay vardump
        return view('users.index', compact('users')); // Truyền dữ liệu tới view
    }
    public function insert()
    {
        return view('users.insert');
    }
    public function save(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Thêm khách hàng mới
        users::create($validated);

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('users.index')->with('success', 'Thêm nhân viên thành công!');
    }
}
