<?php
// landing.php
include 'config.php';

// If maintenance mode is enabled, show maintenance page
if ($maintenanceMode) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Maintenance - <?php echo $universityName; ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo $maintenancePath; ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { display: flex; align-items: center; justify-content: center; height: 100vh; background: #f4f6f9; }
            .card { text-align: center; padding: 30px; border-radius: 15px; }
            .countdown {
                font-size: 2.5rem;   /* Bigger font */
                font-weight: bold;
                margin-top: 20px;
                color: #f70a0aff;
                letter-spacing: 2px;
            }

        </style>
    </head>
    <body>
        <div class="card shadow">
            <img src="<?php echo $logoPath; ?>" alt="Logo" style="height:450px; margin-bottom:20px;">
            <h2>🔧 Maintenance Mode</h2>
            <p class="lead">Our portal is currently undergoing scheduled maintenance.<br>Please check back later.</p>
            <p>We expect to be back by:</p>
            <p><strong><?php echo $maintenanceEndTime; ?></strong></p>
            <div id="countdown" class="countdown"></div>
        </div>
    <script>
            // Countdown Timer
            var endTime = new Date("<?php echo $maintenanceEndTime; ?>").getTime();

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = endTime - now;

                if (distance > 0) {
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("countdown").innerHTML =
                        days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                } else {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "✅ The portal is now available!";
                }
            }, 1000);
        </script>   
    </body>
    </html>
    <?php
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $universityName; ?> Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $faviconPath; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f4f6f9; }
        .navbar { background: #fb0404fe; }
        .navbar-brand, .nav-link { color: #fff !important; }
        .card { border-radius: 15px; transition: transform 0.2s; }
        .logo-img { height: 40px; margin-right: 10px; }
        .card:hover { transform: scale(1.05); }
        footer { margin-top: 50px; background: #fb0404fe; color: #fff; padding: 15px 0; }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <img src="<?php echo $logoPath; ?>" alt="Logo" class="logo-img">
        <a class="navbar-brand fw-bold" href="#"><?php echo $universityName; ?></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <?php foreach ($portals as $portal): ?>
                    <li class="nav-item"><a class="nav-link" href="#<?php echo strtolower(str_replace(' ', '', $portal['title'])); ?>"><?php echo $portal['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="text-center p-5 bg-light">
    <h1 class="fw-bold">Welcome to <?php echo $universityName; ?> Portals</h1>
    <p class="lead">Quick access to essential university systems</p>
</section>

<!-- Cards Section -->
<div class="container py-5">
    <div class="row g-4">
        <?php foreach ($portals as $portal): ?>
            <div class="col-md-4">
                <div class="card shadow h-100" id="<?php echo strtolower(str_replace(' ', '', $portal['title'])); ?>">
                    <div class="card-body text-center">
                        <h4 class="card-title"><?php echo $portal['title']; ?></h4>
                        <p class="card-text"><?php echo $portal['desc']; ?></p>
                        <a href="<?php echo $portal['link']; ?>" class="btn <?php echo $portal['btn']; ?>">Visit</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
    <p>&copy; <?php echo date("Y"); ?> <?php echo $universityName; ?>. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
