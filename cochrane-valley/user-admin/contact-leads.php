<?php
require_once 'header.php';
require_once 'side-bar.php';
require_once 'secure/db_connect.php';

// Handle Delete Action
if (isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    
    $stmt = $conn->prepare("DELETE FROM contact_leads WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            $success_msg = "Contact lead deleted successfully.";
        } else {
            $error_msg = "Failed to delete contact lead.";
        }
        $stmt->close();
    } else {
        $error_msg = "Database error: Failed to prepare statement.";
    }
}

// Check if table exists
$table_exists = $conn->query("SHOW TABLES LIKE 'contact_leads'")->num_rows > 0;

// Fetch contact leads if table exists
$leads = [];
$search = trim($_GET['search'] ?? '');

if ($table_exists) {
    $query = "SELECT * FROM contact_leads";
    if ($search !== '') {
        $escaped_search = $conn->real_escape_string($search);
        $query .= " WHERE name LIKE '%$escaped_search%' OR phone LIKE '%$escaped_search%' OR email LIKE '%$escaped_search%' OR message LIKE '%$escaped_search%'";
    }
    $query .= " ORDER BY created_at DESC";
    
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $leads[] = $row;
        }
    }
}
?>

<main class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h3 class="fw-bold mb-0">Contact Leads Log</h3>
            
            <form method="GET" class="d-flex align-items-center gap-2">
                <input type="text" name="search" class="form-control" placeholder="Search leads..." value="<?php echo htmlspecialchars($search); ?>" style="width: 250px;">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                <?php if ($search !== ''): ?>
                    <a href="contact-leads.php" class="btn btn-outline-secondary"><i class="fas fa-times"></i></a>
                <?php endif; ?>
            </form>
        </div>

        <?php if (isset($success_msg)): ?>
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php endif; ?>
        <?php if (isset($error_msg)): ?>
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0 align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Contact details</th>
                                <th>Message</th>
                                <th>Submitted At</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!$table_exists || empty($leads)): ?>
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="far fa-envelope-open fa-3x mb-3 text-secondary"></i>
                                        <h5>No Contact Leads Found</h5>
                                        <p class="mb-0 small text-secondary">
                                            <?php echo !$table_exists ? 'Table not initialized. Submit the form on the website to trigger table creation.' : 'No contact lead records matched your query.'; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($leads as $lead): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-3 bg-soft-primary text-primary" style="width: 35px; height: 35px; font-size: 0.9rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                <?php echo strtoupper(substr($lead['name'], 0, 1)); ?>
                                            </div>
                                            <div>
                                                <div class="fw-bold"><?php echo htmlspecialchars($lead['name']); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small">
                                            <div><i class="fas fa-phone-alt me-1 text-muted"></i> <?php echo htmlspecialchars($lead['phone']); ?></div>
                                            <div><i class="far fa-envelope me-1 text-muted"></i> <?php echo htmlspecialchars($lead['email']); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="small text-muted" style="max-width: 350px; display: inline-block;" title="<?php echo htmlspecialchars($lead['message']); ?>">
                                            <?php echo nl2br(htmlspecialchars($lead['message'])); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-muted small">
                                            <?php echo date('M d, Y H:i', strtotime($lead['created_at'])); ?>
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <form method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this contact lead?');">
                                            <input type="hidden" name="delete_id" value="<?php echo $lead['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete lead">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
.bg-soft-primary { background-color: rgba(59, 130, 246, 0.1); }
</style>

</body>
</html>
