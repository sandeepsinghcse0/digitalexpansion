<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url(); ?>_assets/admin/plugins/sweetalert2/sweetalert2.min.css">

<!-- Hero Banner Section -->
<section class="section innerpage-banner" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 0;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center page-intro">
            <div class="breadcrumb-wrap mb-3">
                <a href="<?= base_url() ?>" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 1rem;">Home</a>
                <span style="color: rgba(255,255,255,0.6); margin: 0 8px;">/</span>
                <a href="#" class="active" style="color: white; text-decoration: none; font-size: 1rem;">Contact Us</a>
            </div>
            <div class="page-desc text-center">
                <h1 class="mb-3" style="color: white; font-size: 3rem; font-weight: 700; line-height: 1.2;">
                    Get In Touch With Us
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; max-width: 600px; line-height: 1.6;">
                    We'd love to hear from you. Send us your queries and we'll get back to you as soon as possible.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="ftco-section" style="padding: 60px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="row mb-5 g-4">
            <!-- Address Box -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-box" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                    <div class="icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <span class="fa fa-map-marker" style="color: white; font-size: 2rem;"></span>
                    </div>
                    <h5 style="color: #1a1a1a; font-weight: 600; margin-bottom: 12px; font-size: 1.2rem;">Address</h5>
                    <p style="color: #666; font-size: 1rem; line-height: 1.6; margin-bottom: 0;">
                        <a href="<?= $app_data->google_map ?>" target="_blank" style="color: #667eea; text-decoration: none; transition: color 0.3s ease; display: block; overflow: hidden; text-overflow: ellipsis;" onmouseover="this.style.color='#764ba2';" onmouseout="this.style.color='#667eea';">
                            <?= $app_data->address ?>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Phone Box -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-box" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                    <div class="icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <span class="fa fa-phone" style="color: white; font-size: 2rem;"></span>
                    </div>
                    <h5 style="color: #1a1a1a; font-weight: 600; margin-bottom: 12px; font-size: 1.2rem;">Phone</h5>
                    <div style="color: #666; font-size: 1rem; line-height: 1.8;">
                        <?php if ($app_data->primary_phone_number) { ?>
                            <p style="margin-bottom: 8px;">
                                <a href="tel:<?= str_replace(" ", "", $app_data->primary_phone_number); ?>" style="color: #667eea; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#764ba2';" onmouseout="this.style.color='#667eea';">
                                    <?= $app_data->primary_phone_number ?>
                                </a>
                            </p>
                        <?php } ?>
                        <?php if ($app_data->secondary_phone_number) { ?>
                            <p style="margin-bottom: 0;">
                                <a href="tel:<?= str_replace(" ", "", $app_data->secondary_phone_number); ?>" style="color: #667eea; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#764ba2';" onmouseout="this.style.color='#667eea';">
                                    <?= $app_data->secondary_phone_number ?>
                                </a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Email Box -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-box" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                    <div class="icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <span class="fa fa-envelope" style="color: white; font-size: 2rem;"></span>
                    </div>
                    <h5 style="color: #1a1a1a; font-weight: 600; margin-bottom: 12px; font-size: 1.2rem;">Email</h5>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        <a href="mailto:<?= $app_data->primary_email ?>" style="color: #667eea; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#764ba2';" onmouseout="this.style.color='#667eea';" title="<?= $app_data->primary_email ?>">
                            <?= $app_data->primary_email ?>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Website Box -->
            <div class="col-md-6 col-lg-3">
                <div class="contact-box" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                    <div class="icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <span class="fa fa-globe" style="color: white; font-size: 2rem;"></span>
                    </div>
                    <h5 style="color: #1a1a1a; font-weight: 600; margin-bottom: 12px; font-size: 1.2rem;">Website</h5>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        <a href="<?= $app_data->website_url ?>" style="color: #667eea; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#764ba2';" onmouseout="this.style.color='#667eea';" target="_blank" title="<?= $app_data->website_url ?>">
                            <?= $app_data->website_url ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="ftco-section" style="padding: 60px 0;">
    <div class="container">
        <div class="row g-4">
            <!-- Form Column -->
            <div class="col-lg-8">
                <div class="contact-form-wrapper" style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                    <h3 style="color: #1a1a1a; font-size: 1.8rem; font-weight: 700; margin-bottom: 10px;">Send us a Message</h3>
                    <p style="color: #666; margin-bottom: 30px; font-size: 1rem;">We'll respond to your inquiry within 24 hours.</p>
                    
                    <div id="form-message-warning" class="mb-3" style="display: none; padding: 15px; background-color: #fff3cd; border: 1px solid #ffc107; border-radius: 6px; color: #856404;"></div>
                    <div id="form-message-success" class="mb-3" style="display: none; padding: 15px; background-color: #d4edda; border: 1px solid #28a745; border-radius: 6px; color: #155724;">
                        Your message was sent successfully! Thank you for contacting us.
                    </div>

                    <form id="save-contact" class="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="field-name" style="color: #333; font-weight: 600; margin-bottom: 8px; display: block; font-size: 0.95rem;">Full Name *</label>
                                    <input type="text" name="name" id="field-name" placeholder="John Doe" class="form-control required" title="Full Name" data-input-type="default" data-minlength="4" style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease; background-color: #f9f9f9;" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="field-email" style="color: #333; font-weight: 600; margin-bottom: 8px; display: block; font-size: 0.95rem;">Email Address *</label>
                                    <input type="text" name="email" id="field-email" placeholder="john@example.com" class="form-control required" title="Email Address" data-input-type="email" data-minlength="4" style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease; background-color: #f9f9f9;" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="field-subject" style="color: #333; font-weight: 600; margin-bottom: 8px; display: block; font-size: 0.95rem;">Subject *</label>
                                    <input type="text" name="subject" id="field-subject" placeholder="What is this regarding?" class="form-control required" title="Subject" data-input-type="default" style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease; background-color: #f9f9f9;" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="field-message" style="color: #333; font-weight: 600; margin-bottom: 8px; display: block; font-size: 0.95rem;">Message *</label>
                                    <textarea name="message" id="field-message" class="form-control required" cols="30" rows="5" placeholder="Tell us more about your inquiry..." title="Message" data-input-type="default" style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s ease; background-color: #f9f9f9; resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12" style="display: flex; gap: 12px; margin-top: 10px;">
                                <button type="button" class="btn btn-outline-secondary reset-button" style="padding: 12px 30px; border: 2px solid #ddd; color: #666; border-radius: 8px; font-weight: 600; transition: all 0.3s ease; flex: 1;" onmouseover="this.style.backgroundColor='#f0f0f0';" onmouseout="this.style.backgroundColor='transparent';">
                                    Reset
                                </button>
                                <button class="btn submit-button" type="button" onclick="return _handleFormValidate('save-contact', 'formdata', _saveContact);" style="padding: 12px 30px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 8px; font-weight: 600; transition: opacity 0.3s ease; flex: 1; cursor: pointer;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                                    Send Message
                                </button>
                                <button class="btn loading-button d-none" type="button" disabled style="padding: 12px 30px; background: #ccc; color: white; border: none; border-radius: 8px; font-weight: 600; flex: 1;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                    Sending...
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map Column -->
            <div class="col-lg-4">
                <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); height: 100%; min-height: 550px;">
                    <iframe src="<?= $app_data->iframe_google_map ?>" width="100%" height="100%" style="border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    input.form-control:focus,
    textarea.form-control:focus {
        border-color: #667eea !important;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25) !important;
        background-color: white !important;
    }

    input.form-control,
    textarea.form-control {
        transition: all 0.3s ease;
    }

    input.form-control:hover,
    textarea.form-control:hover {
        border-color: #667eea;
    }

    .contact-box {
        height: 100%;
    }

    @media (max-width: 992px) {
        .contact-form-wrapper {
            padding: 30px !important;
        }
    }

    @media (max-width: 768px) {
        .contact-form-wrapper {
            padding: 25px !important;
        }
        
        h3 {
            font-size: 1.4rem !important;
        }
    }
</style>

<script src="<?= base_url(); ?>_assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
    $('#save-contact .reset-button').click(function() {
        $("#save-contact").trigger("reset");
        $('#save-contact .submit-button').removeClass("d-none");
        $('#form-message-warning').hide();
        $('#form-message-success').hide();
        if (!!document.querySelector('#save-contact .input-message')) {
            document.querySelectorAll('#save-contact .input-message').forEach(function(element) {
                element.remove();
            });
        }
    });

    function _setServiceId(id) {
        $("#service-type-input").val(id);
    }
</script>

<?= $this->endSection() ?>