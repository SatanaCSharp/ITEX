<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $idReport = $id;
        $itemsPerPage = 15;
        $comments = Comment::where('report_id', $idReport)->paginate($itemsPerPage);

        return view('backEnd.admin.comments.index', ['comments' => $comments, 'idReport' => $idReport]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $idReport = $id;
        $userId = Auth::user()->id;

        return view('backEnd.admin.comments.create', ['idReport' => $idReport, 'userId'=>$userId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $idReport)
    {

        $this->validate($request, [
            'description' => 'required',
            'user_id' => 'required',
            'report_id' => 'required',
        ]);

        Comment::create($request->all());

        Session::flash('message', 'Comment added!');
        Session::flash('status', 'success');

        return redirect('admin/reports/' . $idReport . '/comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($idReport, $id)
    {
        $comment = Comment::findOrFail($id);
        return view('backEnd.admin.comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($idReport,$id)
    {
        $reportId = $idReport;
        $comment = Comment::findOrFail($id);

        return view('backEnd.admin.comments.edit',['comment'=>$comment,'reportId'=>$reportId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($idReport,$id, Request $request)
    {
        $this->validate($request, ['description' => 'required', 'user_id' => 'required', 'report_id' => 'required',]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        Session::flash('message', 'Comment updated!');
        Session::flash('status', 'success');

        return redirect('admin/reports/' . $idReport . '/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($idReport,$id)
    {
        $reportId = $idReport;
        $comment = Comment::findOrFail($id);
        $comment->delete();

        Session::flash('message', 'Comment deleted!');
        Session::flash('status', 'success');

        return redirect('admin/reports/' . $reportId .'/comments');
    }

}
