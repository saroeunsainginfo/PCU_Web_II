<?php
session_start();
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the DELETE statement
    $sql = "DELETE FROM inventory WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error preparing the statement: ' . htmlspecialchars($conn->error));
    }

    // Bind the ID parameter
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['message'] = "Item deleted successfully.";
        header("Location: view_items.php"); 
    } else {
        $_SESSION['message'] = "Error deleting item: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
} else {
    $_SESSION['message'] = "No item ID provided.";
}

$conn->close();
// Redirect to your inventory list page
exit();
?>
