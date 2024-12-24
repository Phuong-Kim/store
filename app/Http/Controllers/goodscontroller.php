<?php

namespace App\Http\Controllers;

use App\Models\goods; // Thêm dòng này

use Illuminate\Http\Request;

class goodscontroller extends Controller
{
    //hiển thị danh sách KH
    public function index()
    {
        $goods = goods::all(); // Lấy tất cả từ bảng 
        // dd($staff);// thay vardump
        return view('goods.index', compact('goods')); // Truyền dữ liệu tới view
    }
    public function insert()
    {
        return view('goods.insert');
    }
    public function save(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
        ]);
        // if ($request->hasFile('photo')) {
        //     $photoPath = $request->file('photo')->store('uploads', 'public'); // Lưu ảnh vào thư mục storage/app/public/uploads
        //     $validated['photo'] = $photoPath; // Lưu đường dẫn ảnh vào mảng dữ liệu
        // }

        // Thêm khách hàng mới
        goods::create($validated);

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('goods.index')->with('success', 'Thêm hàng hóa thành công!');
    }
    public function destroy($id)
    {
        $goods = goods::findOrFail($id); // Tìm hàng hóa theo ID
        $goods->delete(); // Xóa hàng hóa

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('goods.index')->with('success', 'Xóa hàng hóa thành công!');
    }
    //nút edit
    public function edit($id)
    {
        $goods = goods::findOrFail($id); // Tìm hàng hóa theo ID
        return view('goods.edit', compact('goods')); // Truyền dữ liệu sang view
    }
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        // Tìm hàng hóa và cập nhật
        $goods = goods::findOrFail($id);
        $goods->update($validated);

        // Redirect và hiển thị thông báo thành công
        return redirect()->route('goods.index')->with('success', 'Cập nhật hàng hóa thành công!');
    }
}
