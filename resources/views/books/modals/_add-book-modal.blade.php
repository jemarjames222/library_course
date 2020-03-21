<!-- Modal -->
<div class="modal fade" id="add-book-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('books.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Borrow Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
                @csrf
                Book Name<input class="form-control mb-2" name="book_name" placeholder="Book Name" required/>
                Author Name<input class="form-control mb-2" name="author_name" placeholder="Author Name" required/>
                Book Number<input class="form-control mb-2" name="book_number" placeholder="Book Number" required/>
                Student Name<input class="form-control mb-2" name="student_name" placeholder="Full Name" required/>
                Student ID<input class="form-control mb-2" name="student_id" placeholder="Student ID" required/>
                Return Date<input type="date" class="form-control mb-2" name="return_date" placeholder="Return Date" required/>
                
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>