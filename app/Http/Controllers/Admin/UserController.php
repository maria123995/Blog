<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('dashboard.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request , User $user )
    {
        //    return $request;
        // dd($request->validated());
        // try {

            // $user->admin_id = $request->admin_id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->Auth::guard('admin')->user()->id;

            $save = $user->save();
            if ($save) {
                session()->flash('success', 'تمت الاضافة بنجاح');
            }
            return redirect(route('dashboard.user.index'));
        // } catch (\Exception $ex) {

        //     return redirect()->route('admin.user.index')->with(['error' => 'حدث خطأ ما']);
        // }

        // Comment::create([
        //     'comment' => $request->comment,
        //     'post_id' => $post->id,
        //     'user_id' => auth()->user()->id,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;

            $save = $user->save();
            if ($save) {
                session()->flash('success', 'تم التعديل بنجاح');
            }
            return redirect(route('dashboard.user.index'));
        } catch (\Exception $ex) {

            return redirect()->route('dashboard.user.index')->with(['error' => 'حدث خطأ ما']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
