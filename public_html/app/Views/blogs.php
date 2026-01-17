<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Blog | CritiHome
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="about-sec position-relative">
    <div class="container d-flex justify-content-center align-items-cente py-5">
    <div class="card border-0 p-4 col-10 flex">
        <h1 class="mb-4">Latest Blog Posts</h1>
        
        <?php foreach ($posts as $post): ?>
            <div class="mb-4 p-3 border rounded shadow-sm">
                <h3><?= esc($post['title']) ?></h3>
                <p><?= esc($post['excerpt']) ?></p>
                <a href="<?= base_url('blogs/' . $post['slug']) ?>" class="btn btn-primary btn-sm">Read More</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</section>
<?= $this->endSection() ?> 
