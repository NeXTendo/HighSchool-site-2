<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern High School</title>
    
    <!-- Favicon Import from Web -->
    <link rel="icon" href="https://cdn.jsdelivr.net/gh/your-repo/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.example.com/assets/img/favicon.png" sizes="32x32">
    
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <!-- PHP: Dynamic Header -->
    <?php include 'header.php'; ?>
    <main class="container">
        <section class="hero">
            <div class="hero-text">
                <h1>Welcome to Our School</h1>
                <p>Building the future, one student at a time.</p>
            </div>
            <img src="/assets/img/schoolbuilding.jpg" alt="School Building" class="hero-img">
        </section>

        <section class="card-section">
            <div class="card">
                <img src="/assets/img/unistudents.jpg" alt="About Us" class="card-img">
                <div class="card-content">
                    <h2>About Us</h2>
                    <p>Learn more about our programs, faculty, and history.</p>
                    <a href="about.html" class="cta-button"><i class="fas fa-arrow-right"></i> Read More</a>
                </div>
            </div>

            <div class="card">
                <img src="/assets/img/admissions.jpg" alt="Admissions" class="card-img">
                <div class="card-content">
                    <h2>Admissions</h2>
                    <p>Ready to join us? Find out more about the admissions process, deadlines, and how to apply.</p>
                    <a href="admissions.html" class="cta-button"><i class="fas fa-check-circle"></i> Apply Now</a>
                </div>
            </div>

            <div class="card">
                <img src="/assets/img/newsandevents.jpg" alt="Latest Events" class="card-img">
                <div class="card-content">
                    <h2>Latest News & Events</h2>
                    <div class="news-item">
                        <h3>Annual Science Fair</h3>
                        <p>Join us for the annual science fair showcasing student projects and innovations.</p>
                        <a href="news_events.html" class="cta-button"><i class="fas fa-info-circle"></i> Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- PHP: Dynamic Footer -->
    <?php include 'footer.php'; ?>

    <script src="/assets/js/main.js"></script>
</body>
</html>
