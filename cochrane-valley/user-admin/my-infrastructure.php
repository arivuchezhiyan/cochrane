<?php
require_once 'header.php';
require_once 'side-bar.php';
require_once 'secure/db_connect.php';

// Handle delete request
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    
    // Get image path to unlink file
    $stmt_img = $conn->prepare("SELECT image_path FROM infrastructure WHERE id=?");
    $stmt_img->bind_param("i", $delete_id);
    $stmt_img->execute();
    $stmt_img->bind_result($del_img_path);
    if ($stmt_img->fetch()) {
        if ($del_img_path && file_exists("../" . $del_img_path)) {
            unlink("../" . $del_img_path);
        }
    }
    $stmt_img->close();

    $stmt = $conn->prepare("DELETE FROM infrastructure WHERE id=?");
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        $msg = "Infrastructure item deleted successfully!";
        $msg_type = "success";
    } else {
        $msg = "Failed to delete infrastructure item.";
        $msg_type = "danger";
    }
    $stmt->close();
}

// Fetch all infrastructure items
$items = [];
$res = $conn->query("SELECT * FROM infrastructure ORDER BY created_at DESC");
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $items[] = $row;
    }
}
?>

<main class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">My Infrastructure</h3>
            <a href="create-infrastructure-item.php" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Add Infrastructure Image
            </a>
        </div>

        <?php if (isset($msg)): ?>
            <div class="alert alert-<?php echo $msg_type; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>

        <?php if (empty($items)): ?>
            <div class="alert alert-info">No infrastructure images found. Start by uploading one!</div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($items as $item): ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card h-100">
                        <!-- Image -->
                        <div style="height: 200px; overflow: hidden; background: #f8f9fa;">
                            <?php if (!empty($item['image_path'])): ?>
                                <img src="../<?php echo htmlspecialchars($item['image_path']); ?>" 
                                     class="card-img-top" 
                                     style="width: 100%; height: 100%; object-fit: cover;"
                                     alt="<?php echo htmlspecialchars($item['alt_text'] ?? $item['title']); ?>">
                            <?php else: ?>
                                <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                                    <i class="fas fa-image fa-3x"></i>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-truncate" title="<?php echo htmlspecialchars($item['title']); ?>">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h5>
                            
                            <div class="text-muted small mb-3">
                                <strong>Alt Text:</strong> <?php echo htmlspecialchars($item['alt_text'] ?? 'N/A'); ?>
                            </div>
                            
                            <div class="mt-auto d-flex justify-content-end">
                                <a href="my-infrastructure.php?delete=<?php echo $item['id']; ?>" 
                                   class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Are you sure you want to delete this infrastructure image?');">
                                    <i class="fas fa-trash-alt me-1"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
