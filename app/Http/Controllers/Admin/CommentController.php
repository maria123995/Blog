<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();

        return view('dashboard.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    return $request;
        // try {

            $comments = new Comment();
            $comments->admin_id = $request->admin_id;
            $comments->commentable_id = $request->commentable_id;
            $comments->commentable_type = $request->commentable_type;
            $comments->comment = $request->comment;


            $save = $comments->save();
            if ($save) {
                session()->flash('success', 'تمت الاضافة بنجاح');
            }
            return redirect(route('dashboard.comment.index'));
        // } catch (\Exception $ex) {

        //     return redirect()->route('admin.comment.index')->with(['error' => 'حدث خطأ ما']);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $supadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comments = Comment::find($id);
        return view('dashboard.comment.edit', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {

            $comments = Comment::find($id);
            if (!$comments) {
                return redirect()->route('dashboard.comment.index', $id)->with(['error' => ' هذه المقالة غير موجودة']);
            }
            $comments->admin_id = $request->admin_id;
            $comments->user_id = $request->user_id;
            $comments->comment = $request->comment;

            $save = $comments->save();
            if ($save) {
                session()->flash('success', 'تم التعديل بنجاح');
            }
            return redirect(route('dashboard.comment.index'));
        } catch (\Exception $ex) {

            return redirect()->route('dashboard.comment.index')->with(['error' => 'حدث خطأ ما']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $supadmin)
    {
        //
    }
}
