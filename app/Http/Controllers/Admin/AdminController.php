<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();

        return view('dashboard.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Admin $request)
    {
        //    return $request;
        // try {

            $admin = new Admin();
            $admin->admin_id = $request->admin_id;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = $request->password;

            $save = $admin->save();
            if ($save) {
                session()->flash('success', 'تمت الاضافة بنجاح');
            }
            return redirect(route('dashboard.admin.index'));
        // } catch (\Exception $ex) {

        //     return redirect()->route('admin.supadmin.index')->with(['error' => 'حدث خطأ ما']);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return view('dashboard.admin.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        // $admins = Admin::find($id);
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        try {

            $admin->admin_id = $request->admin_id;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = $request->password;

            $save = $admin->save();
            if ($save) {
                session()->flash('success', 'تم التعديل بنجاح');
            }
            return redirect(route('dashboard.admin.index'));
        } catch (\Exception $ex) {

            return redirect()->route('dashboard.admin.index')->with(['error' => 'حدث خطأ ما']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
