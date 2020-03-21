<!-- Modal -->
<div class="modal fade" id="delete-book-modal-{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete book "{{ $book->full_name }}" borrowed by {{ $book->ffull_name }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('books.destroy', array('id'=>$book->id)) }}" method="post">
        @csrf
        <div class="modal-body">
      
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
        </form>
    </div>
  </div>
</div>