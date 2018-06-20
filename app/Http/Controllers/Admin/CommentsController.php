<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $itemsPerPage = 15;
        $comments = Comment::paginate($itemsPerPage);

        return view('backEnd.admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['description' => 'required', 'user_id' => 'required', 'report_id' => 'required', ]);

        Comment::create($request->all());

        Session::flash('message', 'Comment added!');
        Session::flash('status', 'success');

        return redirect('admin/comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        return view('backEnd.admin.comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        return view('backEnd.admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['description' => 'required', 'user_id' => 'required', 'report_id' => 'required', ]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        Session::flash('message', 'Comment updated!');
        Session::flash('status', 'success');

        return redirect('admin/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();

        Session::flash('message', 'Comment deleted!');
        Session::flash('status', 'success');

        return redirect('admin/comments');
    }

}
