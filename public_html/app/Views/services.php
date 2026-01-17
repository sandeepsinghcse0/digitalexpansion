<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold">Our Services</h2>
    <div class="row g-4">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-4"><!-- Added mb-4 for margin between cards -->
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?= esc($service->name) ?></h5>
                        <p class="card-text"><?= esc($service->description) ?></p>
                        <?php if (isset($service->price)): ?>
                            <p class="text-primary fw-semibold mb-2">₹<?= esc($service->price) ?></p>
                        <?php endif; ?>
                        <div class="mt-auto">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal" class="btn theme-red-dark-btn mt-3" onclick="_setServiceId(<?= $service->id ?>)">Book Now</a>
                            <a href="tel:+918420218585" class="btn theme-red-dark-btn mt-3">Call</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>