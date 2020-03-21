<!-- Modal -->
<div class="modal fade" id="edit-book-modal-{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('books.update') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Borrowed Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}"/>
                Book Name<input class="form-control mb-2" name="book_name" placeholder="Book Name" value="{{ $book->book_name }}"/>
                Author Name<input class="form-control mb-2" name="author_name" placeholder="Author Name" value="{{ $book->author_name }}"/>
                Book Number<input class="form-control mb-2" name="book_number" placeholder="Book Number" value="{{ $book->book_number }}"/>
                Student Full Name<input class="form-control mb-2" name="student_name" placeholder="Student Full Name" value="{{ $book->student_name }}"/>
                Student ID<input class="form-control mb-2" name="student_id" placeholder="Student ID" value="{{ $book->student_id }}"/>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>