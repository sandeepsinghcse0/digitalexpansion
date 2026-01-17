<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Career | Join Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <h1 class="text-center mb-4">Join Our Team</h1>

  <?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success text-center">
      <?= session()->getFlashdata('message') ?>
    </div>
  <?php endif; ?>

  <div class="row">
    <!-- Job Listings -->
    <div class="col-md-6 mb-4">
      <h3>Current Openings</h3>
      <ul class="list-group">
        <li class="list-group-item">
          <strong>Business Development Manager (BDM)</strong><br>
          Location: Kolkata<br>
          Experience: 1-3 Years
        </li>
      </ul>
    </div>

    <!-- Application Form -->
    <div class="col-md-6 mb-4">
      <h3>Apply Now</h3>
      <form action="/career/apply" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" name="name" id="name" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" id="email" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="text" name="phone" id="phone" required class="form-control">
        </div>
        <div class="mb-3">
          <label for="position" class="form-label">Position Applying For</label>
          <input type="position" name="position" id="position" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
      </form>
    </div>
  </div>
</div>


</body>
</html>


<?= $this->endSection() ?> 