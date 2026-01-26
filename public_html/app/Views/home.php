<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
    .site-banner {
        position: relative;
        min-height: 600px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .site-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.90), 0%, rgba(118, 75, 162, 0.70) 100%);
        z-index: 2;
    }

    .banner-slider-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        z-index: 1;
    }

    .banner-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .banner-slide.active {
        opacity: 1;
    }

    .banner-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .banner-wrapper {
        position: relative;
        z-index: 3;
        container: fluid;
    }

    .banner-desc {
        position: relative;
        z-index: 3;
        color: white;
    }

    .banner-desc .child-1 {
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        opacity: 0.95;
        margin-bottom: 10px;
    }

    .banner-desc .ban-title {
        font-size: 2.8rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .banner-desc .ban-title span {
        display: block;
        color: rgba(255, 255, 255, 0.95);
    }

    .banner-desc .ban-shrt-desc {
        font-size: 1.1rem;
        line-height: 1.6;
        opacity: 0.95;
        margin-bottom: 30px;
        max-width: 600px;
    }

    .theme-red-dark-btn,
    .theme-white-dark-btn {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .theme-red-dark-btn {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
        color: white;
    }

    .theme-red-dark-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 107, 107, 0.3);
        color: white;
    }

    .theme-white-dark-btn {
        background: transparent;
        color: white;
        border-color: white;
    }

    .theme-white-dark-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    .banner-slider-dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 12px;
        z-index: 4;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .slider-dot.active {
        background: white;
        width: 32px;
        border-radius: 6px;
    }

    .slider-dot:hover {
        background: rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 768px) {
        .site-banner {
            min-height: 400px;
        }

        .banner-desc .ban-title {
            font-size: 1.8rem;
        }

        .banner-desc .ban-shrt-desc {
            font-size: 0.95rem;
        }

        .theme-red-dark-btn,
        .theme-white-dark-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
    }
</style>

<!-- banner section start -->
<section class="site-banner blue-bg">
    <div class="banner-slider-container">
        <div class="banner-slide active" data-slide="0">
            <img src="<?= base_url('/images/banner-img-1.png'); ?>" alt="Banner 1" />
        </div>
        <div class="banner-slide" data-slide="1">
            <img src="<?= base_url('/images/banner-img-2.png'); ?>" alt="Banner 2" />
        </div>
        <div class="banner-slide" data-slide="2">
            <img src="<?= base_url('/images/banner-img-3.png'); ?>" alt="Banner 3" />
        </div>
    </div>

    <div class="container banner-wrapper">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-12">
                <div class="banner-desc" data-aos="fade-in" data-aos-duration="800" data-aos-delay="100">
                    <h3>Digital Expansion Pvt Ltd</h3>
                    <p class="">
                        Your Trusted IT Partner for Web, Salesforce, Shopify & Mobile App Solutions.
                    </p>
                    <p class="">
                        Your Vision, Our Expertise Together, Boundless Possibilities. 
                    </p>
                    <div class="d-flex flex-wrap">
                        <a href="/services" class="theme-red-dark-btn mr-3">Explore Our Service</a>
                        <a href="/about" class="theme-white-dark-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Dots -->
    <div class="banner-slider-dots">
        <span class="slider-dot active" onclick="currentSlide(0)"></span>
        <span class="slider-dot" onclick="currentSlide(1)"></span>
        <span class="slider-dot" onclick="currentSlide(2)"></span>
    </div>
</section>
<!-- banner section end -->

<script>
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.banner-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = slides.length;

    function showSlide(index) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    function nextSlide() {
        currentSlideIndex = (currentSlideIndex + 1) % totalSlides;
        showSlide(currentSlideIndex);
    }

    function currentSlide(index) {
        currentSlideIndex = index;
        showSlide(currentSlideIndex);
    }

    // Auto-rotate slides every 6 seconds
    setInterval(nextSlide, 6000);
</script>

<!-- about us section start -->
<section class="about-sec position-relative pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="<?= base_url('/images/about-1.png'); ?>" alt="About Us" class="img-fluid" />
            </div>
            <div class="col-md-7 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <div class="h-about position-relative">
                    <h2 class="title">
                        <span class="t-child-1">About us</span>
                        <span class="t-child-2">Committed To Delivering High Quality Solutions
                            Services!</span>
                    </h2>
                    <p>
                        Digital Expansion Pvt Ltd is a leading IT services company in India, delivering end-to-end digital solutions that help businesses scale efficiently and sustainably. Based in Noida, we specialize in Web Development, Salesforce solutions, Shopify development, and Mobile Application Development, serving startups, SMEs, and enterprises across industries.
                        With a strong focus on quality, performance, and scalability, our team designs and builds secure, user-centric digital products that drive real business impact. From Salesforce CRM and Salesforce Commerce Cloud implementations to custom web applications, Shopify eCommerce stores, and mobile apps, we combine technical expertise with strategic thinking to deliver measurable results.
                        At Digital Expansion, we believe technology should simplify operations, enhance customer experiences, and accelerate growth. Our agile development approach, transparent communication, and long-term support model make us a trusted IT partner for businesses looking to transform digitally.
                        Partner with Digital Expansion Pvt Ltd to turn your digital vision into powerful, future-ready solutions. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us section end -->
<!-- Long term care section end -->
<!-- trestimonial section start -->
<section class="testimony-sec pt-50 pb-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title text-center">
                    What our clients say
                    <span class="t-child-2">
                        Here is a few testimonials or feedback from our happy clients
                    </span>
                </h2>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme testimony-carousel">
                    <div class="item">
                        <div class="testi-block">
                            <img class="quote-img" src="<?= base_url('/images/icons/left-quote.png'); ?>" alt="Quote">
                            <p>
                               A highly professional software development team that delivered a reliable IT solution tailored for fire fighting operations. Their expertise, responsiveness, and attention to detail made the entire process smooth and successful.
                            </p>
                            <div class="testi-person-block d-flex align-items-center">
                                <div class="testi-name pl-1">
                                    <h5>Rajesh Shingh</h5>
                                    <p>3D Fire & Safety Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-block">
                            <img class="quote-img" src="<?= base_url('/images/icons/left-quote.png'); ?>" alt="Quote">
                            <p>
                                Working with this team was a seamless experience. They helped us build a customized home health care IT solution that supports patient management, caregiver coordination, and reporting. Their technical expertise and proactive approach made a real difference in our day-to-day operations.
                            </p>
                            <div class="testi-person-block d-flex align-items-center">
                                <div class="testi-name pl-1">
                                    <h5>Piyush Vishwas</h5>
                                    <p>CritiHome</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-block">
                            <img class="quote-img" src="<?= base_url('/images/icons/left-quote.png'); ?>" alt="Quote">
                            <p>
                                The team delivered a modern and efficient IT solution tailored for the hospitality industry. They understood the importance of seamless guest journeys, system integration, and real-time operations. The platform has helped us improve service quality, streamline internal processes, and enhance overall guest satisfaction.
                            </p>
                            <div class="testi-person-block d-flex align-items-center">
                                <div class="testi-name pl-1">
                                    <h5>Shruti Didwania</h5>
                                    <p>Kolkata, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- book now section end -->

<?= $this->endSection() ?> 