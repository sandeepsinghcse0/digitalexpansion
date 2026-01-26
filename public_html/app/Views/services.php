<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4 fw-bold" style="font-size: 2.8rem; color: #1a1a1a; line-height: 1.2;">Our Services</h2>
            <p class="text-center text-muted" style="font-size: 1.15rem; max-width: 900px; margin: 0 auto; line-height: 1.8; letter-spacing: 0.3px;">
                End-to-End Digital Solutions That Drive Growth
                <br><br>
                At Digital Expansion, we help businesses scale faster by delivering robust, future-ready digital solutions. 
                Our expertise spans Salesforce ecosystems, web applications, and mobile app development,
                enabling organizations to streamline operations, enhance customer experiences,
                and accelerate revenue growth.
            </p>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="row g-5">
        <?php foreach ($services as $service): ?>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow-lg border-0 rounded-lg overflow-hidden transition-all" style="transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)';">
                    
                    <!-- Card Header with Gradient -->
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 25px; color: white;">
                        <h5 class="card-title fw-bold mb-0" style="font-size: 1.6rem; line-height: 1.3;"><?= esc($service->name) ?></h5>
                    </div>

                    <div class="card-body d-flex flex-column" style="padding: 28px;">
                        <!-- Price Section -->
                        <?php if (isset($service->price)): ?>
                            <div class="mb-4 p-4 rounded" style="background-color: #f0f4ff; border-left: 4px solid #667eea;">
                                <p class="text-muted mb-1" style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Starting Price</p>
                                <p class="text-primary fw-bold mb-0" style="font-size: 1.6rem;">₹<?= esc($service->price) ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Description -->
                        <p class="card-text text-muted mb-5" style="font-size: 1rem; line-height: 1.7; color: #666;"><?= esc($service->description) ?></p>

                        <!-- What We Offer Section -->
                        <?php if (isset($service->what_we_offer) && !empty($service->what_we_offer)): ?>
                            <div class="mb-5">
                                <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                    <span style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 5px; height: 28px; border-radius: 3px; margin-right: 12px;"></span>
                                    <h6 class="fw-bold mb-0" style="color: #1a1a1a; font-size: 1.15rem;">What We Offer</h6>
                                </div>
                                <ul class="list-group list-group-flush" style="gap: 8px;">
                                    <?php 
                                        $offers = $service->what_we_offer;
                                        
                                        if (is_string($offers) && (json_decode($offers) !== null)) {
                                            $offers = json_decode($offers, true);
                                        } elseif (is_string($offers)) {
                                            $offers = explode(',', $offers);
                                        }
                                        
                                        if (!is_array($offers)) {
                                            $offers = [$offers];
                                        }
                                        
                                        foreach ($offers as $offer):
                                    ?>
                                        <li class="list-group-item ps-3 border-0" style="background-color: #f9f9f9; border-radius: 6px; padding: 12px 14px !important; display: flex; align-items: center;">
                                            <span class="badge bg-success me-3" style="padding: 7px 9px; font-size: 0.9rem;">→</span>
                                            <span style="color: #333; font-size: 1rem; line-height: 1.6;"><?= esc(trim($offer)) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- Business Benefits Section -->
                        <?php if (isset($service->business_benefits) && !empty($service->business_benefits)): ?>
                            <div class="mb-4">
                                <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                    <span style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 5px; height: 28px; border-radius: 3px; margin-right: 12px;"></span>
                                    <h6 class="fw-bold mb-0" style="color: #1a1a1a; font-size: 1.15rem;">Business Benefits</h6>
                                </div>
                                <ul class="list-group list-group-flush" style="gap: 8px;">
                                    <?php 
                                        $benefits = $service->business_benefits;
                                        
                                        if (is_string($benefits) && (json_decode($benefits) !== null)) {
                                            $benefits = json_decode($benefits, true);
                                        } elseif (is_string($benefits)) {
                                            $benefits = explode(',', $benefits);
                                        }
                                        
                                        if (!is_array($benefits)) {
                                            $benefits = [$benefits];
                                        }
                                        
                                        foreach ($benefits as $benefit):
                                    ?>
                                        <li class="list-group-item ps-3 border-0" style="background-color: #f9f9f9; border-radius: 6px; padding: 12px 14px !important; display: flex; align-items: center;">
                                            <span class="badge bg-primary me-3" style="padding: 7px 9px; font-size: 0.9rem;">✓</span>
                                            <span style="color: #333; font-size: 1rem; line-height: 1.6;"><?= esc(trim($benefit)) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Card Footer with CTA -->
                    <div class="card-footer bg-light border-0" style="padding: 18px 28px;">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#bookNowModal" class="btn btn-sm w-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; transition: opacity 0.3s ease; padding: 12px 24px; font-size: 1rem; font-weight: 600;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                            Learn More & Schedule a Call
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
    .transition-all {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card {
        border-radius: 12px !important;
        overflow: hidden;
    }
    
    .badge {
        font-size: 0.85rem;
        font-weight: 600;
    }
    
    .list-group-item {
        padding: 12px 14px !important;
        font-size: 1rem;
    }
    
    h2 {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Better typography for readability */
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    p {
        color: #555;
    }

    .card-body {
        line-height: 1.8;
    }
</style>

<?= $this->endSection() ?>