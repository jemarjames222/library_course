<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
    	return view('books.index', array('books' => $books));
    }

    public function addBook(){
        return view('books.add-book');
    }

    public function store(Request $request){
        $todaysDate = Carbon::today();  

        $request->validate([
            'book_name' => 'required',
            'author_name' => 'required',
            'student_name' => 'required',
            'return_date' => 'required',
            'student_id' => 'required',
            'book_number' => 'required',


            
            
        ]);
        
        $book = new Book;
        
        $book->book_name = $request->book_name;
        $book->author_name = $request->author_name;
        $book->book_number = $request->book_number;
        $book->student_name = $request->student_name;
        $book->student_id = $request->student_id;
        $book->issued_date = $todaysDate;
        $book->return_date = $request->return_date;
        $book->fines_amount = 0;
        $book->pay_amount = 0;
        $book->paid_value = 1;
        $book->change_amount = 0;
        $book->status_borrowed = "PENDING";

        $book->save();
        return redirect()->route('books.index')->withStatus('Book Borrowed.');
    }
    public function update(Request $request){
        $request->validate([
            'book_name' => 'required',
            'author_name' => 'required',
            'student_name' => 'required',
            'student_id' => 'required',
            'book_number' => 'required',
        ]);
        $book = Book::find($request->id);
        if($book){
            $book->book_name = $request->book_name;
            $book->author_name = $request->author_name;
            $book->book_number = $request->book_number;
            $book->student_name = $request->student_name;
            $book->student_id = $request->student_id;
            $book->save();
        }

        return redirect()->back()->withStatus('Borrowed book updated.'); 
    }

    public function destroy(Request $request){
        $book = Book::find($request->id);

        if($book){
            $book->delete();
        }

        return redirect()->back()->withStatus('Borrowed book deleted.');
    }

public function returnBook(Request $request){
   
    $book = Book::find($request->id);
    
    if($book){

        $book->status_borrowed = "RETURNED";
        $book->paid_value = 2;
        $book->fines_amount = 0;
        $book->pay_amount += $request->pay_amount;
        $book->save();
    }

    return redirect()->back()->withStatus('Returned Successfully.'); 
}
}