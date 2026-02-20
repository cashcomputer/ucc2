<!--====== Start Page Section ======-->
<section class="page-banner">
    <div class="page-bg-wrapper p-r z-1 bg_cover pt-100 pb-110" style="background-image: url(assets/images/bg/page-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Page Banner Content ===-->
                    <div class="page-banner-content text-center">
                        <h1 class="page-title"><?php echo isset($page_banner_title) ? $page_banner_title : ""; ?></h1>
                        <?php if (!empty($breadcrumbs)): ?>
                            <nav class="breadcrumbs">
                                <ul class="breadcrumb-link">
                                    <?php foreach ($breadcrumbs as $crumb): ?>
                                        <li>
                                            <?php if (!empty($crumb['url'])): ?>
                                                <a href="<?php echo htmlspecialchars($crumb['url']); ?>">
                                                    <?php echo htmlspecialchars($crumb['title']); ?>
                                                </a>
                                            <?php else: ?>
                                                <span class="current">
                                                    <?php echo htmlspecialchars($crumb['title']); ?>
                                                </span>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Section ======-->