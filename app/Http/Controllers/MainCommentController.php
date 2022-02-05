<?php

namespace App\Http\Controllers;

use App\Models\MainComment;
use Illuminate\Http\Request;

class MainCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = MainComment::all();
        return response()->json([
            'data' => $item
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
        $item = MainComment::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainComment  $mainComment
     * @return \Illuminate\Http\Response
     */
    public function show(MainComment $mainComment)
    {
        //
        $item = MainComment::find($mainComment);
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
     * @param  \App\Models\MainComment  $mainComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainComment $mainComment)
    {
        //
        $update = [
            'content' => $request->content,
        ];
        $item = MainComment::where('id', $mainComment->id)->update($mainComment);
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
     * @param  \App\Models\MainComment  $mainComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainComment $mainComment)
    {
        //
        $item = MainComment::where('id', $mainComment->id)->delete();
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
