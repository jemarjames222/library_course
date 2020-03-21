@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
         	<center><h1>CEC Library List of Borrowed Books</h1></center>
			 <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#add-book-modal">Borrow Book</button>
         	@include('books.modals._add-book-modal')

			 <table class="table">
         		<thead>
         			<tr>
         				<th>#</th>
         				<th>Book Title</th>
						<th>Author</th>
						<th>Book No</th>
						<th>Borrowed By</th>
						<th>Student ID</th>
						<th>Date Issued</th>
						<th>Date Return</th>
						<th>Fines</th>
						<th>Status</th>
						<th>Paid Amount</th>
						<th>Change</th>
						<th>Action</th>
						

         			</tr>
         		</thead>
         		<tbody>
				 	@foreach($books as $book)
         			<tr>
         				<td>{{ $loop->iteration }}</td>
         				<td>{{ $book->book_name }}</td><td> {{ $book->author_name }}</td><td> {{ $book->book_number }}</td><td> {{ $book->student_name }} </td><td> {{ $book->student_id }} </td><td> {{ $book->issued_date }}</td><td> {{ $book->return_date }}</td><td> P{{$book->fine}}</td><td> {{ $book->status_borrowed }}</td><td> P{{ $book->change_amount }}</td>
						<td>
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-book-modal-{{$book->id}}">Edit</button>
							@include('books.modals._edit-book-modal')

							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-book-modal-{{$book->id}}">Delete</button>
							@include('books.modals._delete-book-modal')

							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#return-book-modal-{{$book->id}}">Return</button>
							@include('books.modals._return-book-modal')
							

						</td>
					 <tr>
					 @endforeach
         		</tbody>
         	</table>
        </div>
    </div>
</div>
@endsection

