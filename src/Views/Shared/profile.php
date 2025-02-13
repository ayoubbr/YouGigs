<?php
$loggedUser = $_SESSION['user'];
$user = [
    'name' => $loggedUser->getFirstname() . ' ' . $loggedUser->getLastname(),
    'title' => 'Full Stack Developer',
    'hourly_rate' => 45,
    'rating' => 4.9,
    'total_jobs' => 124,
    'success_rate' => 98,
    'location' => 'New York, United States',
    'member_since' => 'January 2023',
    'skills' => ['PHP', 'JavaScript', 'React', 'Node.js', 'MySQL', 'Laravel', 'AWS'],
    'total_hours' => 1840,
    'bio' => 'Experienced full-stack developer with 8+ years of experience in web development. Specialized in building scalable applications using modern technologies.',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($user['name']); ?> - YouGigs Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/profile.css">
</head>

<body>
    <div class="container">
        <div class="profile-header">
            <div class="profile-top">
                <div class="profile-avatar">
                    <?php echo substr($user['name'], 0, 1); ?>
                </div>
                <div class="profile-info">
                    <h1><?php echo htmlspecialchars($user['name']); ?></h1>
                    <div class="profile-title"><?php echo htmlspecialchars($user['title']); ?></div>
                    <div class="profile-location">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <?php echo htmlspecialchars($user['location']); ?>
                    </div>
                </div>
                <div class="profile-actions">
                    <!-- <button class="btn btn-primary">Hire Me</button>
                    <button class="btn btn-outline">Save</button> -->
                    <a href="/" class="btn btn-outline" style="width: 100%;">Home</a>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-value">$<?php echo $user['hourly_rate']; ?>/hr</div>
                    <div class="stat-label">Hourly Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $user['rating']; ?>/5</div>
                    <div class="stat-label">Job Success</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $user['total_jobs']; ?></div>
                    <div class="stat-label">Total Jobs</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo number_format($user['total_hours']); ?></div>
                    <div class="stat-label">Hours Worked</div>
                </div>
            </div>
        </div>

        <div class="profile-content">
            <div class="main-content">
                <div class="section-card">
                    <h2 class="section-title">About Me</h2>
                    <p><?php echo htmlspecialchars($user['bio']); ?></p>
                </div>

                <div class="section-card">
                    <h2 class="section-title">Skills</h2>
                    <div class="skills-list">
                        <?php foreach ($user['skills'] as $skill): ?>
                            <span class="skill-tag"><?php echo htmlspecialchars($skill); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section-card">
                    <h2 class="section-title">Portfolio</h2>
                    <div class="portfolio-grid">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <div class="portfolio-item">Project <?php echo $i; ?></div>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="section-card">
                    <h2 class="section-title">Client Reviews</h2>
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="review-item">
                            <div class="review-header">
                                <div class="review-project">E-commerce Website Development</div>
                                <div class="review-rating">★★★★★</div>
                            </div>
                            <p>"Excellent work! Very professional and delivered on time."</p>
                            <div class="review-date">2 months ago</div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="sidebar">
                <div class="section-card">
                    <div class="availability">
                        <span class="availability-dot"></span>
                        Available for work
                    </div>
                    <div class="hourly-rate">$<?php echo $user['hourly_rate']; ?>/hr</div>
                    <p>Member since <?php echo $user['member_since']; ?></p>
                    <hr style="margin: 20px 0; border: none; border-top: 1px solid var(--border-color);">
                    <!-- <button class="btn btn-primary" style="width: 100%; margin-bottom: 12px;">Hire Me</button>-->
                    <a href="/" class="btn btn-outline" style="width: 100%;">Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>