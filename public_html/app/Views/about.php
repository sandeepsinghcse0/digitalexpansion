<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
    .about-banner {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 100px 0;
        color: white;
        text-align: center;
    }

    .about-banner h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }

    .about-banner p {
        font-size: 1.1rem;
        opacity: 0.95;
        margin: 0;
    }

    .about-section {
        padding: 60px 0;
        position: relative;
    }

    .about-section:nth-child(even) {
        background-color: #f8f9fa;
    }

    .about-content h2 {
        font-size: 2rem;
        color: #333;
        font-weight: 700;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 15px;
    }

    .about-content h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        border-radius: 2px;
    }

    .about-content p {
        font-size: 1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }

    .about-content ul {
        list-style: none;
        padding: 0;
        margin: 30px 0;
    }

    .about-content ul li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
        padding: 12px 14px;
        background-color: #f9f9f9;
        border-radius: 8px;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #333;
        transition: all 0.3s ease;
    }

    .about-content ul li:hover {
        background-color: #f0f4ff;
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.1);
    }

    .about-content ul li svg {
        width: 20px;
        height: 20px;
        min-width: 20px;
        margin-right: 12px;
        margin-top: 2px;
        fill: #667eea;
    }

    .about-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .btn-primary-custom {
        display: inline-block;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 20px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        color: white;
    }

    .breadcrumb-wrap {
        font-size: 0.95rem;
        margin-bottom: 20px;
    }

    .breadcrumb-wrap a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-wrap a:hover {
        color: white;
    }

    .breadcrumb-wrap a.active {
        color: white;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .about-banner h1 {
            font-size: 1.8rem;
        }

        .about-content h2 {
            font-size: 1.5rem;
        }

        .about-section {
            padding: 40px 0;
        }
    }
</style>

<!-- About Banner Section -->
<section class="about-banner">
    <div class="container">
        <div class="breadcrumb-wrap">
            <a href="<?= base_url('/') ?>">Home</a> /
            <a href="#" class="active">About Us</a>
        </div>
        <h1>About Us</h1>
        <p>Committed to Excellence and Innovation</p>
    </div>
</section>

<!-- About Section 1 -->
<section class="about-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 col-12 mb-3 mb-md-0" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <div class="about-image">
                    <img src="<?= base_url('/images/about-1.png'); ?>" alt="About Company" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="about-content">
                    <h2>Who We Are</h2>
                    <p>We are a forward-thinking company dedicated to delivering innovative solutions and exceptional service. Our team brings together years of experience and expertise to serve our clients with integrity, professionalism, and commitment.</p>
                    <p>Our mission is to create meaningful impact through quality solutions, ensuring every client receives dedicated attention and outstanding results that exceed expectations.</p>
                    
                    <h3 style="font-size: 1.2rem; color: #333; margin-top: 30px; margin-bottom: 15px;">Why Choose Us</h3>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Expert team with proven track record
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Customer-centric approach to service delivery
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Innovative solutions tailored to your needs
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Transparent communication and partnership approach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section 2 -->
<section class="about-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 col-12 order-md-2 mb-3 mb-md-0" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="about-image">
                    <img src="<?= base_url('/images/about-2.png'); ?>" alt="Our Services" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 order-md-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                <div class="about-content">
                    <h2>Our Commitment</h2>
                    <p>We believe in building long-term relationships with our clients based on trust, quality, and measurable results. Our approach combines strategic thinking with technical expertise to deliver solutions that drive real business impact.</p>
                    <p>Every project is handled with meticulous attention to detail, ensuring that we not only meet but exceed expectations. We're committed to continuous improvement and staying at the forefront of industry innovation.</p>
                    
                    <h3 style="font-size: 1.2rem; color: #333; margin-top: 30px; margin-bottom: 15px;">What We Deliver</h3>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            High-quality deliverables on time
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Comprehensive support and documentation
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Scalable solutions for growth
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m17.588,8.584l.703.71-6.039,5.982c-.483.479-1.121.719-1.758.719-.633,0-1.266-.236-1.749-.709l-3.035-2.991.701-.712,3.034,2.99c.581.568,1.524.565,2.104-.007l6.039-5.982Zm6.412,3.416c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z" />
                            </svg>
                            Ongoing maintenance and optimization
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>