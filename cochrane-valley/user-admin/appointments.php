<?php
require_once 'header.php';
require_once 'side-bar.php';
require_once 'secure/db_connect.php';

// Handle Delete Action
if (isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    
    $stmt = $conn->prepare("DELETE FROM appointments WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            $success_msg = "Appointment request deleted successfully.";
        } else {
            $error_msg = "Failed to delete appointment request.";
        }
        $stmt->close();
    } else {
        $error_msg = "Database error: Failed to prepare statement.";
    }
}

// Check if table exists
$table_exists = $conn->query("SHOW TABLES LIKE 'appointments'")->num_rows > 0;

// Fetch appointments if table exists
$appointments = [];
$search = trim($_GET['search'] ?? '');

if ($table_exists) {
    $query = "SELECT * FROM appointments";
    if ($search !== '') {
        $escaped_search = $conn->real_escape_string($search);
        $query .= " WHERE name LIKE '%$escaped_search%' OR phone LIKE '%$escaped_search%' OR email LIKE '%$escaped_search%' OR service LIKE '%$escaped_search%'";
    }
    $query .= " ORDER BY created_at DESC";
    
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $appointments[] = $row;
        }
    }
}
?>

<main class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h3 class="fw-bold mb-0">Appointments Log</h3>
            
            <form method="GET" class="d-flex align-items-center gap-2">
                <input type="text" name="search" class="form-control" placeholder="Search appointments..." value="<?php echo htmlspecialchars($search); ?>" style="width: 250px;">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                <?php if ($search !== ''): ?>
                    <a href="appointments.php" class="btn btn-outline-secondary"><i class="fas fa-times"></i></a>
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
                                <th>Patient Name</th>
                                <th>Contact info</th>
                                <th>Service/Specialty</th>
                                <th>Requested Date</th>
                                <th>Message</th>
                                <th>Submitted At</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!$table_exists || empty($appointments)): ?>
                                <tr>
                                    <td colspan="7" class="text-center py-5 text-muted">
                                        <i class="far fa-calendar-times fa-3x mb-3 text-secondary"></i>
                                        <h5>No Appointments Found</h5>
                                        <p class="mb-0 small text-secondary">
                                            <?php echo !$table_exists ? 'Table not initialized. Submit the form on the website to trigger table creation.' : 'No appointment records matched your query.'; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($appointments as $appt): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-avatar me-3 bg-soft-success text-success" style="width: 35px; height: 35px; font-size: 0.9rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                <?php echo strtoupper(substr($appt['name'], 0, 1)); ?>
                                            </div>
                                            <div>
                                                <div class="fw-bold"><?php echo htmlspecialchars($appt['name']); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small">
                                            <div><i class="fas fa-phone-alt me-1 text-muted"></i> <?php echo htmlspecialchars($appt['phone']); ?></div>
                                            <div><i class="far fa-envelope me-1 text-muted"></i> <?php echo htmlspecialchars($appt['email']); ?></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-soft-info text-info">
                                            <?php echo htmlspecialchars($appt['service']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark small">
                                            <i class="far fa-calendar-alt me-1 text-muted"></i> 
                                            <?php echo date('M d, Y', strtotime($appt['date'])); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="small text-muted" style="max-width: 250px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="<?php echo htmlspecialchars($appt['message']); ?>">
                                            <?php echo htmlspecialchars($appt['message'] ?: 'N/A'); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-muted small">
                                            <?php echo date('M d, Y H:i', strtotime($appt['created_at'])); ?>
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <form method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this appointment request?');">
                                            <input type="hidden" name="delete_id" value="<?php echo $appt['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete request">
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
.bg-soft-success { background-color: rgba(40, 167, 69, 0.1); }
.bg-soft-info { background-color: rgba(76, 201, 240, 0.1); }
</style>

</body>
</html>
