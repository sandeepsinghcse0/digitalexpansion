<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?= base_url(); ?>_assets/admin/plugins/sweetalert2/sweetalert2.min.css">
<section class="section innerpage-banner">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center page-intro">
            <div class="breadcrumb-wrap mb-2 ">
                <a href="#">Home /</a>
                <a href="#" class="active">Contact Us</a>
            </div>
            <div class="page-desc text-center">
                <h1 class=" mb-4 ">
                    Contact Form
                </h1>
                <p class=" f-s-18">
                    Have any Query ? Contact us
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p><a href="<?= $app_data->google_map ?>" target="_blank"><?= $app_data->address ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <?php if ($app_data->primary_phone_number) { ?>
                                        <p><a href="tel:<?= str_replace(" ", "", $app_data->primary_phone_number); ?>"><?= $app_data->primary_phone_number ?></a></p>
                                    <?php } ?>
                                    <?php if ($app_data->secondary_phone_number) { ?>
                                        <p><a href="tel:<?= str_replace(" ", "", $app_data->secondary_phone_number); ?>"><?= $app_data->secondary_phone_number ?></a></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:<?= $app_data->primary_email ?>"><?= $app_data->primary_email ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="#">critihome.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form id="save-contact" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="field-name">Full Name *</label>
                                                <input type="text" name="name" id="field-name" placeholder="Enter Your Full Name" class="form-control required" title="Full Name" data-input-type="default" data-minlength="4" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="field-email">Email Address *</label>
                                                <input type="text" name="email" id="field-email" placeholder="Enter Your Email Address" class="form-control required" title="Email Address" data-input-type="email" data-minlength="4" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="field-subject">Subject *</label>
                                                <input type="text" name="subject" id="field-subject" placeholder="Enter Subject" class="form-control required" title="Subject" data-input-type="default" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="field-message">Message *</label>
                                                <textarea name="message" id="field-message" class="form-control required" cols="30" rows="4" placeholder="Enter Message" title="Message" data-input-type="default"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-secondary reset-button">Reset</button>
                                                <button class="btn btn theme-red-dark-btn submit-button" type="button" onclick="return _handleFormValidate('save-contact', 'formdata', _saveContact);">Send Message</button>
                                                <button class="btn btn theme-red-dark-btn loading-button d-none" type="button" disabled>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Sending...
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <iframe src="<?= $app_data->iframe_google_map ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="<?= base_url(); ?>_assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
    $('#save-contact .reset-button').click(function() {
        $("#save-contact").trigger("reset");
        $('#save-contact .submit-button').removeClass("d-none");
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