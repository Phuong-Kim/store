<?php

namespace App\Http\Controllers;

use App\Models\staff; // Thêm dòng này

use Illuminate\Http\Request;

class staffcontroller extends Controller
{
    //hiển thị danh sách KH
    public function index()
    {
        $staff = staff::all(); // Lấy tất cả khách hàng từ bảng KH
        // dd($staff);// thay vardump
        return view('staff.index', compact('staff')); // Truyền dữ liệu tới view
    }
    public function insert()
    {
        return view('staff.insert');
    }
    public function save(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits_between:10,11', // Số điện thoại 10-11 chữ số
            'birthday' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Chỉ chấp nhận ảnh
            'video' => 'required|mimes:mp4,mov,avi|max:10240', // 10MB max

        ]);
        // dd($validated);
        // die;

        // Xử lý file ảnh nếu có
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads', 'public'); // Lưu ảnh vào thư mục storage/app/public/uploads
            $videoPath = $request->file('video')->store('videos', 'public');
            $validated['photo'] = $photoPath; // Lưu đường dẫn ảnh vào mảng dữ liệu
            $validated['video'] = $videoPath;
        }

        // Thêm khách hàng mới
        staff::create($validated);

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('staff.index')->with('success', 'Thêm nhân viên thành công!');
    }
    public function destroy($id)
    {
        $staff = staff::findOrFail($id); // Tìm hàng hóa theo ID
        $staff->delete(); // Xóa hàng hóa

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('staff.index')->with('success', 'Xóa hàng hóa thành công!');
    }
    //nút edit
    public function edit($id)
    {
        $staff = staff::findOrFail($id); // Tìm hàng hóa theo ID
        return view('staff.edit', compact('staff')); // Truyền dữ liệu sang view
    }
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits_between:10,11', // Số điện thoại 10-11 chữ số
            'birthday' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        // Tìm hàng hóa và cập nhật
        $staff = staff::findOrFail($id);
        $staff->update($validated);

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('staff.index')->with('success', 'Cập nhật hàng hóa thành công!');
    }
}
