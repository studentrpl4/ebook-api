<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return $book;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue,
        ]);

        return response()->json([
                'susccess' => 201,
                'message' => 'data berhasil disimpan',
                'data' => $table
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        if ($book) {
            return response()->json([
                "sattus" => 200,
                'data' => $book
            ], 200);
        } else {
            return response()->json([
                "status" => 404,
                "massage" => 'id atas ' . $id . 'tidak ditemukan'
            ], 404);
         } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = book::find($id);
        if($book){
            $book->title - $requset->title ? $requset->title : $book->title;
            $book->description - $requset->description ? $requset->description : $book->description;
            $book->author - $requset->author ? $requset->author : $book->author;
            $book->publisher - $requset->publisher ? $requset->publisher : $book->publisher;
            $book->date_of_issue - $requset->date_of_issue ? $requset->date_of_issue : $book->date_of_issue;
            $book->save();
            return responser()->json([
                'status' =>404,
                'message' => $id . 'tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = book::where('id',$id)->first();
        if($book){
            $book->delete();
            return response()->json([
                'status' =>200,
                'data' => $book
            ], 200);  
        }else{
            return response()->json([
                'status' => 2022,
                'message' => 'id' . $id . 'tidak ditenukan'
            ], 404);
        }
    }
}
