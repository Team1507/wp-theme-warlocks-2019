
        <!-- Footer -->
        <footer class="page-footer footer-links font-small blue">
            <div class="container text-center text-md-left d-none d-md-block d-print-none pt-4">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <h5 class="text-uppercase">Contact Us</h5>
                        <p>Lockport Robotics Inc. is a registered 501(c)(3) nonprofit educational charity that inspires local students to pursue careers in STEM related fields.</p>
                        <p><span class="fas fa-home fa-fw"></span> 250 Lincoln Avenue, Lockport, NY 14094<br><span class="fas fa-phone fa-fw"></span> (716) 478-4520 <br><span class="far fa-envelope fa-fw"></span> contact@warlocks1507.com</p>

                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">News and Media</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="<?php echo get_site_url()."/category/general-news/"; ?>"><span class="far fa-newspaper fa-fw"></span> General News</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url()."/category/warlocks-blog/"; ?>"><span class="fas fa-rss fa-fw"></span> Warlocks Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url()."/photos/"; ?>"><span class="far fa-image fa-fw"></span> Photo Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url()."/our-calendar/"; ?>"><span class="far fa-calendar-alt fa-fw"></span> Calendar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Follow Us</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.facebook.com/Warlocks1507" target="_blank"><span class="fab fa-facebook-f fa-fw"></span> Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Warlocks1507" target="_blank"><span class="fab fa-twitter fa-fw"></span> Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/warlocks_1507" target="_blank"><span class="fab fa-instagram fa-fw"></span> Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">Copyright &copy; <?php echo date("Y"); ?> Lockport Robotics Inc. All rights reserved.</div>
        </footer>
        <!-- Footer -->

        <!-- JavaScript -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.slim.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" ></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.custom.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>