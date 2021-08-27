<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><?= $title; ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Nama Barang</label>
        <input class="form-control" type="text" name="nama_barang" aria-label="default input example">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Pilih Gambar</label>
        <input class="form-control" name="nama_gambar" type="file" id="formFileMultiple" multiple>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

<script type="text/javascript">
    $('#modalTambahPesan').validate($.extend({
        submitHandler: function(form, event) {
            var feedback_container = $('#feedback-container');
            var feedback = $('#feedback');
            var myModal = $('#myModal');
            let submit = $('[type=submit]');
            $(form).ajaxSubmit({
                success: function(e) {
                    submit.addClass('disabled');
                    if (e.status) {
                        // proses sukses
                        feedback.html(e.message);
                        feedback.removeClass('alert-danger');
                        feedback.addClass('alert-success');
                        feedback_container.removeClass('d-none');
                        // window href ke next location / close modal
                        setTimeout(() => {
                            myModal.modal('hide');
                            location.reload();
                        }, 1500);
                    } else {
                        // proses gagal
                        submit.removeClass('disabled');
                        feedback.html(e.message);
                        feedback.addClass('alert-danger');
                        feedback_container.removeClass('d-none');
                    }
                },
                dataType: 'json'
            });
        },
        rules: {
            kategoriSurat: {
                required: true
            },
            // kirimKeEmail: {
            //     required: true
            // },
            deskripsi: {
                required: true
            },
            memo: {
                required: true
            },
            namaFile: {
                required: true
            },
            create_by: {
                required: true
            }
        },
        errorClass: 'is-invalid text-danger',
        validClass: 'is-valid',
        messages: {
            kategoriSurat: {
                required: "Kategori tidak boleh kosong!"
            },
            // kirimKeEmail: {
            //     required: "Email yang dituju harus tidak boleh kosong!"
            // },
            deskripsi: {
                required: "Deskripsi tidak boleh kosong!"
            },
            memo: {
                required: "Memo tidak boleh kosong!"
            }
        },
    }));
</script>