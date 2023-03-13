<!-- Modal -->
<div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('sp.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_supplier">Supplier</label>
                        <input value="{{ $row->nama_supplier }}" type="text" required name="nama_supplier" class="form-control" id="nama_supplier">
                        <input type="hidden" name="id" value="{{ $row->id }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Supplier</label>
                        <input value="{{ $row->alamat }}" type="text" required name="alamat" class="form-control" id="alamat">
                        <input type="hidden" name="id" value="{{ $row->id }}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp Supplier</label>
                        <input value="{{ $row->no_telp }}" type="text" required name="no_telp" class="form-control" id="no_telp">
                        <input type="hidden" name="id" value="{{ $row->id }}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>