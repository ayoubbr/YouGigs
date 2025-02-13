<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Freelance Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/dashboard.css">
    <link rel="stylesheet" href="/assets/styles/admin/projects.css">
    <link rel="shortcut icon" href="/assets/images/freelance.png" type="image/x-icon">
</head>

<body>
    <div class="dashboard">

        <?php include __DIR__ . '/sidebar.php'; ?>

        <main class="main-content">

            <?php
            $route = trim(strtok($_SERVER['REQUEST_URI'], '?'), '/');
            $route = $route === 'admin' ? 'dashboard' : $route;
            include __DIR__ . "/{$route}.php";
            ?>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname.split('/').pop() || 'dashboard';
            const navItems = document.querySelectorAll('.nav-item');

            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.dataset.page === currentPath) {
                    item.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>