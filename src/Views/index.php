<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouGigs - Find Top Freelance Talent & Projects</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/freelance.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/styles/index.css">
</head>

<body>
    <header class="header">
        <div class="header-content">
            <a href="/" class="logo">YouGigs</a>
            <nav class="nav-links">
                <a href="/projects">Browse Gigs</a>
                <a href="/freelances">Find Talent</a>
            </nav>
            <?php
            if (!isset($_SESSION['user'])) {
            ?>
                <div class="auth-buttons">
                    <a href="/login" class="btn btn-outline">Sign In</a>
                    <a href="/register" class="btn btn-primary">Join Now</a>
                </div>
            <?php } else { ?>
                <div class="auth-buttons">
                    <a href="/auth/logout" class="btn btn-outline">Logout</a>
                </div>
            <?php
            }
            ?>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Find the Perfect Freelance Services for Your Business</h1>
            <p>Connect with talented freelancers, collaborate on projects, and grow your business with YouGigs.</p>
            <?php if (!isset($_SESSION['user'])) {
            ?>
                <a href="/register" class="btn btn-primary">Get Started</a>
            <?php
            }
            ?>
        </div>
    </section>

    <section class="features">
        <div class="section-title">
            <h2>Why Choose YouGigs</h2>
            <p>Everything you need to get your project done</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 004.561 21h14.878a2 2 0 001.94-1.515L22 17"></path>
                    </svg>
                </div>
                <h3>Quick & Easy Hiring</h3>
                <p>Find and hire top talent within minutes. Our streamlined process makes recruitment hassle-free.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3>Secure Payments</h3>
                <p>Your payments are protected. Release payment only when you're 100% satisfied with the work.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3>Global Talent Pool</h3>
                <p>Access skilled professionals from around the world. Find the perfect match for your project.</p>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="section-title">
            <h2>Popular Categories</h2>
            <p>Explore our most in-demand services</p>
        </div>
        <div class="categories-grid">
            <a href="/category/{category_name}/projects" class="category-card">
                <h3>Web Development</h3>
                <p>1,234 active gigs</p>
            </a>
            <a href="/category/{category_name}/projects" class="category-card">
                <h3>Graphic Design</h3>
                <p>987 active gigs</p>
            </a>
            <a href="/category/{category_name}/projects" class="category-card">
                <h3>Digital Marketing</h3>
                <p>756 active gigs</p>
            </a>
            <a href="/category/{category_name}/projects" class="category-card">
                <h3>Content Writing</h3>
                <p>543 active gigs</p>
            </a>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Ready to Start Your Project?</h2>
            <p>Join thousands of businesses who trust YouGigs for their freelance needs</p>
            <a href="/register" class="btn btn-white">Create Your Account</a>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h4>For Clients</h4>
                <ul class="footer-links">
                    <li><a href="/">How to Hire</a></li>
                    <li><a href="/freelances">Browse Freelancers</a></li>
                    <li><a href="/project/create">Post a Project</a></li>
                    <li><a href="/">Success Stories</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>For Freelancers</h4>
                <ul class="footer-links">
                    <li><a href="/login">Getting Started</a></li>
                    <li><a href="/projects">Find Work</a></li>
                    <li><a href="/">Tips & Guides</a></li>
                    <li><a href="/">Success Stories</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Resources</h4>
                <ul class="footer-links">
                    <li><a href="/">Help Center</a></li>
                    <li><a href="/">Blog</a></li>
                    <li><a href="/">Community</a></li>
                    <li><a href="/">Podcast</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Careers</a></li>
                    <li><a href="/">Press</a></li>
                    <li><a href="/">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YouGigs. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
