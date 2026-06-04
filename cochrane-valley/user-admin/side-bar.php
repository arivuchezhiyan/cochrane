<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="dashboard.php" class="sidebar-brand">
            <img src="../images/logo.svg" alt="Cochrane Valley" style="height: 45px; width: auto;">
        </a>
    </div>
    
    <div class="sidebar-menu">
        <ul class="nav flex-column">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
            </li>

            <!-- Content Management Section -->
            <li class="sidebar-section-header">Blogs</li>
            <li class="nav-item">
                <a href="my-blogs.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'my-blogs.php' ? 'active' : ''; ?>">
                    <i class="fas fa-layer-group"></i> My Blogs
                </a>
            </li>
            <li class="nav-item">
                <a href="create-blog.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'create-blog.php' ? 'active' : ''; ?>">
                    <i class="fas fa-pen-nib"></i> Write New Blog
                </a>
            </li>

            <li class="sidebar-section-header">Gallery</li>
            <li class="nav-item">
                <a href="my-gallery.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'my-gallery.php' ? 'active' : ''; ?>">
                    <i class="fas fa-images"></i> My Gallery
                </a>
            </li>
            <li class="nav-item">
                <a href="create-gallery-item.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'create-gallery-item.php' ? 'active' : ''; ?>">
                    <i class="fas fa-upload"></i> Upload Image
                </a>
            </li>

            <li class="sidebar-section-header">Infrastructure</li>
            <li class="nav-item">
                <a href="my-infrastructure.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'my-infrastructure.php' ? 'active' : ''; ?>">
                    <i class="fas fa-building"></i> My Infrastructure
                </a>
            </li>
            <li class="nav-item">
                <a href="create-infrastructure-item.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'create-infrastructure-item.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-upload"></i> Upload Facility Image
                </a>
            </li>

            <!-- Leads Section -->
            <li class="sidebar-section-header">Leads</li>
            <li class="nav-item">
                <a href="appointments.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'appointments.php' ? 'active' : ''; ?>">
                    <i class="fas fa-calendar-check"></i> Appointments
                </a>
            </li>
            <li class="nav-item">
                <a href="contact-leads.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact-leads.php' ? 'active' : ''; ?>">
                    <i class="fas fa-envelope-open-text"></i> Contact Leads
                </a>
            </li>

            <!-- Account Section (Merged User Management) -->
            <li class="sidebar-section-header">Account</li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'profile.php' ? 'active' : ''; ?>">
                    <i class="fas fa-user-circle"></i> My Profile
                </a>
            </li>
            
            <!-- User Management Moved Here -->
            <li class="nav-item">
                <a href="users.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : ''; ?>">
                    <i class="fas fa-users"></i> All Users
                </a>
            </li>
            <li class="nav-item">
                <a href="create-user.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'create-user.php' ? 'active' : ''; ?>">
                    <i class="fas fa-user-plus"></i> Add New User
                </a>
            </li>
        </ul>
    </div>
    
    <div class="sidebar-footer">
        <a href="logout.php" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</aside>

<!-- Overlay for mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<script>
    // Simple toggle script
    document.getElementById('sidebarToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('active');
        document.getElementById('sidebarOverlay').classList.toggle('active');
    });

    document.getElementById('sidebarOverlay').addEventListener('click', function() {
        document.getElementById('sidebar').classList.remove('active');
        this.classList.remove('active');
    });
</script>

<style>
/* Overlay styles for mobile */
.sidebar-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 999;
}
.sidebar-overlay.active {
    display: block;
}
/* Ensure logo fits */
.sidebar-brand img {
    max-width: 100%;
}
</style>
