<?php

namespace App\Http\Controllers;

use App\Models\ReComment;
use Illuminate\Http\Request;

class ReCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = ReComment::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = ReComment::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReComment  $reComment
     * @return \Illuminate\Http\Response
     */
    public function show(ReComment $reComment)
    {
        //
        $item = ReComment::find($reComment);
        if($item){
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReComment  $reComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReComment $reComment)
    {
        //
        $update = [
            'content' => $request->content,
        ];
        $item = ReComment::where('id', $reComment->id)->update($reComment);
        if($item){
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReComment  $reComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReComment $reComment)
    {
        //
        $item = ReComment::where('id', $reComment->id)->delete();
        if($item){
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
