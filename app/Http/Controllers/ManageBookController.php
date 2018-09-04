<?php

namespace App\Http\Controllers;

use App\Book;
use App\Ebook;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ManageBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        return view('books.viewbooks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.addbooks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        if($file = $request->file('book_id')){
        $name = time().$file->getClientOriginalName();
        $file->move('ebooks',$name);
        $book = Ebook::create(['file'=>$name]);
        $input['file'] = $book->id;
        }
        Book::create($input);
        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewBooks(){

        return view('books.viewbooks');
    }
    public function get_datatable(){
        return DataTables::of(Book::query()->orderByDesc('id'))->make(true);
    }

    public function description($id){
        $book = Book::findOrFail($id);
        return view('books.description')->with(compact('book'));
    }


}
