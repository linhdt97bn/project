<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiaDiem;

class DiaDiemController extends Controller
{

    public function index()
    {
        $dsdd = Diadiem::all();
        return view('admin.page_admin.danhsachdiadiem', compact('dsdd'));
    }

    public function create()
    {
        return view('admin.page_admin.themdiadiem');
    }

    public function store(Request $request)
    {
        $this-> validate($request,
            [
                'tendiadiem'=>'required|unique:diadiem,tendiadiem'
            ],
            [
                'tendiadiem.required'=>'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique'=>'Địa điểm này đã tồn tại'
            ]);
        $dd = new Diadiem();
        $dd->tendiadiem = $request->tendiadiem;
        $dd->save();
        return redirect()->back()->with('thanhcong','Thêm đại điểm thành công');
    }


    public function edit($id)
    {
        $dd = Diadiem::find($id);
        return view('admin.page_admin.themdiadiem',compact('dd'));
    }

    public function update(Request $request, $id)
    {
        $diadiem = Diadiem::find($id);
        $this-> validate($request,
            [
                'tendiadiem'=>'required|unique:diadiem,tendiadiem'
            ],
            [
                'tendiadiem.required'=>'Tên địa điểm không đưọc để trống',
                'tendiadiem.unique'=>'Địa điểm này đã tồn tại'
            ]);
        $diadiem->tendiadiem = $request->tendiadiem;
        $diadiem->save();
        return redirect('admin/diadiem')->with('thongbao','Sửa địa điểm thành công');
    }

    public function destroy($id)
    {
        Diadiem::find($id)->delete();
        return redirect('admin/diadiem')->with('thongbao','Xóa thành công');    
    }
}
