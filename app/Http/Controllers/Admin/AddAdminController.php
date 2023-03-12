<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AddAdminController extends Controller
{
    public function addadmin()
    {
        $admin = User::where('role',1)->get();
        return view('Admin.AddAdmin.addadmin',[
            'admin' =>$admin,
        ]);

    }

    public function baruadmin()
    {
        return view('Admin.AddAdmin.addadmin-create');
    }

    public function tambahadmin(AdminRequest $request)
    {
        // dd($request->all());

        $admin              = new User();
        $admin->name       = $request->name;
        $admin->username   = $request->username;
        $admin->role       = 1;
        $admin->email      = $request->email;
        $admin->password   = Hash::make($request->password);
        $admin->images     = $request->file('images')->store('img-admin');
        $admin->save();
        return redirect()->route('admin.index')->with('Ok',"Berhasil Menyimpan Data Admin");
    }

    public function editadmin($id)
    {
        $admin = User::findOrFail($id);
        return view('Admin.AddAdmin.addadmin-update', compact('admin'));
    }

    public function updateadmin(Request $request, $id)
    {
        // dd($request->all());


        $admin = User::findOrFail($id);
        //Proses Ubah datanya


        if ($request->hasFile('images')) {

            //upload new image
            $images = $request->file('images');
            $images->storeAs('public/storage/img-admin', $images->hashName());

            //delete old image
            Storage::delete('public/storage/img-admin' . $admin->images);

            //update post with new image
            $admin->update([
                'images'     => $images->hashName(),
            ]);
        } else {

            $admin->name                    = $request->name;
            $admin->username                = $request->username;
            $admin->email                   = $request->email;
            $admin->password                = Hash::make($request->password);
            $admin->images                  = $request->file('images')->store('img-admin');
        }

        // Menyimpan data perubahan
        $admin->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('admin.index');
    }

    public function hapusadmin(Request $request)
    {
        $admin = User::findOrFail($request->id);  // Cari data
        Storage::delete($admin->images); // Hapus file directory system
        $admin->delete(); // Hapus data di database
        return redirect()->back();
    }
}
