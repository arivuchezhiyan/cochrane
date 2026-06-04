<?php
require_once 'secure/auth.php';
require_login();
require_once 'secure/db_connect.php';

// Handle upload request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_FILES['image'])) {
    $title = trim($_POST['title']);
    $alt_text = trim($_POST['alt_text'] ?? $title);

    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $upload_dir = __DIR__ . '/../images/gallery/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        // Sanitize filename
        $raw_name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $clean_name = preg_replace('/[^a-zA-Z0-9_-]/', '', $raw_name);
        $img_name = time() . '_' . $clean_name . '.' . $ext;
        
        $target_file = $upload_dir . $img_name;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image_path = 'images/gallery/' . $img_name;
        }
    }

    if ($image_path) {
        $stmt = $conn->prepare("INSERT INTO gallery (title, alt_text, image_path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $alt_text, $image_path);
        
        if ($stmt->execute()) {
            echo "<script>alert('Image uploaded to gallery successfully!'); window.location.href='my-gallery.php';</script>";
            exit;
        } else {
            $error = "Error saving to database: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error = "Failed to upload image file.";
    }
}
?>

<?php require_once 'header.php'; ?>
<?php require_once 'side-bar.php'; ?>

<main class="main-content">
    <div class="container-fluid">
        <h3 class="mb-4 fw-bold">Upload Gallery Image</h3>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <form method="POST" action="" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Image Title</label>
                        <input type="text" name="title" class="form-control" required placeholder="Enter image title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Alt Text (For SEO)</label>
                        <input type="text" name="alt_text" class="form-control" placeholder="Enter image alt text (defaults to title)">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Select Image File</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="my-gallery.php" class="btn btn-light text-muted">Cancel</a>
                        <button type="submit" class="btn btn-primary px-4">Upload Image</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
