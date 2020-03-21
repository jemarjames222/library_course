<!-- Modal -->
<div class="modal fade" id="return-book-modal-{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('books.return') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Returning Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}"/>
                Book Name<a class="form-control mb-2">{{ $book->book_name }}</a>
                Author Name<a class="form-control mb-2">{{ $book->author_name }}</a>
                Book Number<a class="form-control mb-2">{{ $book->book_number }}</a>
                Borrowed By Student<a class="form-control mb-2">{{ $book->student_name }}</a>
                Student ID<a class="form-control mb-2">{{ $book->student_id }}</a>
                Total Fines<a class="form-control mb-2">P{{ $book->fine }}</a>
                Status<a class="form-control mb-2">{{ $book->status_borrowed }}</a><br>
                <center><a>CONFIRM FINES PAYMENT BELOW</a></center><br>
                Pay Amount<input class="form-control mb-2" name="pay_amount" required/>
               
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>