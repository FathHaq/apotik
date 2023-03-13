<!-- Modal -->
<div class="modal fade" id="detail{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Nama Obat </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <tr>
                            <td>
                                <img src="{{ asset('storage/'.$row->foto_obat) }}" alt="{{ $row->nama_obat }}" class="img-fluid">
                            </td>
                            <td>{{ $row->itemproduk->item_produk }}</td>
                            <td>{{ $row->nama_obat }}</td>
                        </tr>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>