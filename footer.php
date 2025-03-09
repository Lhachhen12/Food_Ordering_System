<footer class="footer d-flex flex-wrap justify-content-between align-items-center px-4 py-4 mt-auto text-light bg-custom-green">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <img src="img/Logo.png" alt="St Lawrence LOGO" width="60" class="me-3 footer-logo">
                    <h5 class="mb-0 fw-bold">St. Lawrence College</h5>
                </div>
                <p class="footer-text mb-1"><i class="bi bi-geo-alt me-2"></i>Chabahil, Kathmandu, Nepal</p>
                <p class="footer-text mb-1"><i class="bi bi-telephone me-2"></i>014469666</p>
                <p class="footer-text mb-3">
                    <i class="bi bi-envelope me-2"></i>
                    <a href="mailto:info@stlawrencecollege.edu.np" class="text-light text-decoration-none footer-link">info@stlawrencecollege.edu.np</a>
                </p>
                <p class="footer-copyright">&copy; 2025 St. Lawrence College - 6th semester group</p>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <h6 class="footer-heading mb-3">Quick Links</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="index.php" class="text-light text-decoration-none footer-link">Home</a></li>
                            <li class="mb-2"><a href="shop_list.php" class="text-light text-decoration-none footer-link">Shop List</a></li>
                            <li class="mb-2"><a href="cust_login.php" class="text-light text-decoration-none footer-link">Login</a></li>
                            <li><a href="cust_regist.php" class="text-light text-decoration-none footer-link">Sign Up</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h6 class="footer-heading mb-3">Connect</h6>
                        <div class="d-flex flex-column">
                            <a class="text-light text-decoration-none footer-social mb-2" target="_blank" href="footdirect.php">
                                <i class="bi bi-telephone me-2"></i>Contact Us
                            </a>
                            <a class="text-light text-decoration-none footer-social mb-2" target="_blank" href="https://www.facebook.com/stlawrencecollege">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a>
                            <a class="text-light text-decoration-none footer-social" target="_blank" href="https://www.instagram.com/stlawrenceofficial/">
                                <i class="bi bi-instagram me-2"></i>Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer specific styles */
    .bg-custom-green {
        background-color: #006400 !important; /* Using !important to ensure it overrides any conflicting styles */
    }
    
    .footer-logo {
        filter: brightness(0) invert(1);
    }
    
    .footer-text {
        font-size: 14px;
        line-height: 1.5;
    }
    
    .footer-copyright {
        font-size: 13px;
        opacity: 0.8;
    }
    
    .footer-heading {
        font-weight: 600;
        position: relative;
        padding-bottom: 8px;
    }
    
    .footer-heading:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    .footer-link {
        transition: all 0.2s ease;
    }
    
    .footer-link:hover {
        color: rgba(255, 255, 255, 0.7) !important;
        padding-left: 5px;
    }
    
    .footer-social {
        display: flex;
        align-items: center;
        transition: all 0.2s ease;
    }
    
    .footer-social:hover {
        color: rgba(255, 255, 255, 0.7) !important;
    }
    
    .footer-social i {
        font-size: 18px;
    }
    
    @media (max-width: 767px) {
        .footer-heading:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .footer-heading, .footer-text, .footer-copyright {
            text-align: center;
        }
        
        .footer-social {
            justify-content: center;
        }
    }
</style>