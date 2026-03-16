<!-- Navigation Bar -->
<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <div class="navbar-logo">
            <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../index.php' : 'index.php'; ?>">
                <div class="logo-placeholder">
                    <img src="<?php echo (isset($is_subpage) && $is_subpage) ? '../assets/images/RV_Logo.png' : 'assets/images/RV_Logo.png'; ?>" alt="Samyak Logo" class="logo-img" style="max-height:48px; width:auto; object-fit:contain; display:block;" />
                </div>
                <div class="logo-text">
                    <div class="logo-main">SAMYAK</div>
                    <div class="logo-sub">Sanskrit Heritage</div>
                </div>
            </a>
        </div>

        <!-- Hamburger Menu Icon -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation Menu -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../index.php' : 'index.php'; ?>" class="nav-link <?php echo (!isset($current_page) || $current_page === 'home') ? 'active' : ''; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../about.php' : 'about.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'about') ? 'active' : ''; ?>">About</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../programs.php' : 'programs.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'programs') ? 'active' : ''; ?>">Programs</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../gallery.php' : 'gallery.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'gallery') ? 'active' : ''; ?>">Gallery</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../publications.php' : 'publications.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'publications') ? 'active' : ''; ?>">Publications</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../donation.php' : 'donation.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'donation') ? 'active' : ''; ?>">Donate</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../contact.php' : 'contact.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'contact') ? 'active' : ''; ?>">Contact</a>
            </li>

            <!-- Authentication links -->
            <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../login.php' : 'login.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'login') ? 'active' : ''; ?>">Login</a>
            </li>
            <!-- <li class="nav-item">
                <a href="<?php echo (isset($is_subpage) && $is_subpage) ? '../signup.php' : 'signup.php'; ?>" class="nav-link <?php echo (isset($current_page) && $current_page === 'signup') ? 'active' : ''; ?>">Sign Up</a>
            </li> -->
        </ul>
    </div>
</nav>

<!-- Decorative line under navbar -->
<div class="navbar-divider"></div>