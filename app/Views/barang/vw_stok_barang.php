<?= $this->extend('template/vw_template') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="modal('tambah','0')">
            Tambah Barang
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url('assets/img/testing.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url('assets/img/testing.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url('assets/img/testing.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?= base_url('assets/img/testing.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function modal(aksi, id) {
        let url = "<?= base_url('stokbarang/modal') ?>";
        $.ajax({
            type: "POST",
            url: url,
            data: {
                aksi: aksi,
                id: id
            },
            success: function(res) {
                $("#modal").html(res).show();
                $("#myModal").modal("show");
            }
        });
    }
</script>

<?= $this->endSection() ?>