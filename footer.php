<?php if (!is_front_page()) : ?>

<?php endif; ?>
</div><!-- /.row -->

</div><!-- /.container -->
<footer class="blog-footer">
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_icon">
                        <img src="<?php bloginfo('template_directory') ?>/img/JOEL-TRANSPORT-LOGO-APPROVED-NR-1.svg" alt="footer logo" />
                        <p>enjoy the move</p>
                    </div>
                </div>
                <!-- services -->
                <div class="col-md-3">
                    <h5>Services</h5>
                    <br />
                    <ul>
                        <li>
                            <a href="">Local Moves</a>
                        </li>
                        <li>
                            <a href="">International Moves</a>
                        </li>
                        <li>
                            <a href="">Home Moves</a>
                        </li>
                        <li>
                            <a href="">Office Moves</a>
                        </li>
                        <li>
                            <a href="">Storage</a>
                        </li>
                        <li>
                            <a href="">Insurance</a>
                        </li>
                        <li>
                            <a class="text-uppercase" href="">Specialized services</a>
                        </li>
                        <li>
                            <a href="">Pets</a>
                        </li>
                        <li>
                            <a href="">Pianos</a>
                        </li>
                        <li>
                            <a href="">Fine art</a>
                        </li>
                        <li>
                            <a href="">Vehicle transport</a>
                        </li>
                        <li>
                            <a href="">Dangerous goods</a>
                        </li>
                    </ul>
                </div>
                <!-- resources -->
                <div class="col-md-3">
                    <h5>Resources</h5>
                    <br />
                    <ul>
                        <li>
                            <a href="">FAQs</a>
                        </li>
                        <li>
                            <a href="">Moving tips</a>
                        </li>
                        <li>
                            <a href="">Home moves checklist</a>
                        </li>
                        <li>
                            <a href="">Office moves checklist</a>
                        </li>
                    </ul>
                </div>
                <!-- contact -->
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <br />
                    <ul>
                        <li>Monday - Friday</li>
                        <li>8am - 5pm</li>
                    </ul>
                    <br />
                    <!-- address -->
                    <p>
                        10 Von tonder street
                        <br />
                        Sunderland Ridge
                        <br />
                        centurion, 0157
                        <br />
                        South Africa
                    </p>
                    <!-- email -->
                    <ul>
                        <li>Email</li>
                        <li>joeltransport.co.za</li>
                    </ul>
                    <!-- phone -->
                    <ul>
                        <li>Phone</li>
                        <li>+27 67 777 8821</li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="nav justify-content-center footer_nav pb-3">
            <li class="nav-item">
                <a class="nav_link active" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Removal Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav_link" href="#">Terms & conditions</a>
            </li>
        </nav>
        <div class="footer_bottom d-flex">
            <div class="copyright text-center">
                <p>Copyright. 2022 Joel Transport. All Rights Reserved</p>
            </div>
            <div class="social_icons">
                <ul class="d-flex">
                    <li class="footer_icons">
                        <a class="icon_link" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="footer_icons">
                        <a class="icon_link" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li class="footer_icons">
                        <a class="icon_link" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li class="footer_icons">
                        <a class="icon_link" href=""><i class="fa fa-twitch" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>

</html>
