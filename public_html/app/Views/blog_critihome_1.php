<?= $this->extend('layout') ?> <!-- Use your layout here -->

<?= $this->section('title') ?>
Home Health Care Blog | CritiHome
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container my-5 d-flex justify-content-center align-items-cente">
    <div class="card shadow-lg border-0 p-4 col-10 flex">
    <h1 class="mb-4 text-primary fw-bold">Expert Home Health Care with a Healing Touch – Welcome to CritiHome</h1>

    <p class="lead">In moments of medical need, nothing is more comforting than the familiar surroundings of home. At <strong>CritiHome</strong>, we bring hospital-quality care to your doorstep — offering patients the medical attention they need, with the emotional warmth they deserve.</p>

    <p>Whether it's recovery after surgery, chronic illness management, or elderly care, our expert caregivers and medical professionals provide <strong>compassionate and personalized health care at home</strong>.</p>

    <h2 class="mt-5 text-secondary">What We Do at CritiHome</h2>
    <p>CritiHome is a dedicated home healthcare service provider, trusted by families across [your city/service area]. Our team of doctors, nurses, and physiotherapists are trained to deliver professional care at home without compromising on quality or safety.</p>

    <h4>Our Core Services:</h4>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">ICU Setup & Critical Care at Home</li>
        <li class="list-group-item">24/7 Trained Nurses and Attendants</li>
        <li class="list-group-item">Doctor Consultation at Home</li>
        <li class="list-group-item">Post-Surgical and Wound Care</li>
        <li class="list-group-item">Physiotherapy and Rehab Services</li>
        <li class="list-group-item">Elderly and Palliative Care</li>
        <li class="list-group-item">Medical Equipment on Rent and Sale</li>
    </ul>

    <h2 class="mt-5 text-secondary">Suggestions for Patients and Families</h2>
    <p>Whether you are recovering at home or managing long-term health conditions, a few key habits can make all the difference:</p>
    <ol>
        <li>Stick to the Treatment Plan – Follow medical advice and take medications on time.</li>
        <li>Keep a Clean, Calm Environment – Minimize stress and reduce infection risk.</li>
        <li>Eat Nutritious Meals – Proper nutrition boosts recovery.</li>
        <li>Stay Hydrated & Rested – Your body heals better when it’s rested and hydrated.</li>
        <li>Talk to Your Caregiver – Communication builds trust and improves care.</li>
        <li>Stay Active (As Advised) – Gentle movement or physiotherapy helps regain strength.</li>
        <li>Monitor Vitals Regularly – We help track key health indicators for timely intervention.</li>
    </ol>

    <p>Our team ensures that you never feel alone in this journey. We are with you — every step, every heartbeat.</p>

    <h2 class="mt-5 text-secondary">Why Families Trust CritiHome</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">✅ Experienced & Certified Healthcare Staff</li>
        <li class="list-group-item">✅ Tailored Care Plans for Each Patient</li>
        <li class="list-group-item">✅ Advanced Equipment & Monitoring Tools</li>
        <li class="list-group-item">✅ Round-the-Clock Support & Emergency Help</li>
        <li class="list-group-item">✅ Affordable Packages Without Compromise</li>
        <li class="list-group-item">✅ Transparent Communication with Families</li>
    </ul>

    <h2 class="mt-5 text-secondary">Connect with CritiHome Today</h2>
    <p>Choosing CritiHome means choosing care, comfort, and confidence. Whether you need immediate medical attention or long-term health support at home, we're just a call away.</p>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Service Area:</strong> Available across Kolkata</li>
        <li class="list-group-item"><strong>Call or WhatsApp:</strong> <?= $app_data->primary_phone_number ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= $app_data->primary_email ?></li>
    </ul>

    <a class="theme-red-dark-btn mr-3 mx-auto text-center" href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal">Book Consultation</a>

    <blockquote class="mt-4 p-3 bg-light border-start border-primary">
        <em>“Let healing begin at home — with CritiHome. Because your health deserves more than just treatment. It deserves care.”</em>
    </blockquote>
</div>
</div>
<?= $this->endSection() ?>
