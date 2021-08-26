<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><?= $title; ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Nama Barang</label>
        <input class="form-control" type="text" aria-label="default input example">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Pilih Gambar</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    <button type="button" class="btn btn-primary">Simpan</button>
</div>