<!-- Modal -->
<div class="modal fade" id="delete{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.hapus')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mb-3">
                        <p class="text-center">Hapus Data Admin <strong style="color: red;">{{ $row->name }} </strong>?</p>
                        <input type="hidden" name="id" value="{{ $row->id }}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
        </form>
    </div>
</div>