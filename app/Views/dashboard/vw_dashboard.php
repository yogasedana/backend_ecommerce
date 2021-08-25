<?= $this->extend('template/vw_template') ?>

<?= $this->section('content') ?>
<div class="col-md-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <i class="las la-inbox bg-danger text-light"></i>
                </div>
                <div class="col-8">
                    <p>Revenue</p>
                    <h5>$65</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <i class="las la-clipboard-list bg-warning text-light"></i>
                </div>
                <div class="col-8">
                    <p>Orders</p>
                    <h5>3000</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <i class="las la-chart-bar bg-success text-light"></i>
                </div>
                <div class="col-8">
                    <p>Sales</p>
                    <h5>5500</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex align-items-center">
                    <i class="las la-id-card bg-info text-light"></i>
                </div>
                <div class="col-8">
                    <p>Employes</p>
                    <h5>256</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>