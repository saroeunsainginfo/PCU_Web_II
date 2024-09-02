<?php
session_start();
include '../php/db.php';

// Fetch the item details to pre-fill the form
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error preparing the statement: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
    $stmt->close();
} else {
    $_SESSION['message'] = "No item ID provided.";
    header("Location: view_items.php"); // Redirect to your inventory list page
    exit();
}

// Handle the form submission to update the item
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $item_name = $_POST['item_name'];
    $category_id = $_POST['category_id'];
    $supplier_id = $_POST['supplier_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE inventory SET item_name = ?, category_id = ?, supplier_id = ?, quantity = ?, price = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error preparing the statement: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("siidssi", $item_name, $category_id, $supplier_id, $quantity, $price, $description, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Item updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating item: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
    header("Location: ../php/view_items.php"); // Redirect to your inventory list page
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="submit"],
        .form-container textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Item</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

            <label for="item_name">Item Name:</label>
            <input type="text" id="item_name" name="item_name" value="<?php echo $item['item_name']; ?>" required>
            
            <label for="category_id">Category ID:</label>
            <input type="number" id="category_id" name="category_id" value="<?php echo $item['category_id']; ?>" required>
            
            <label for="supplier_id">Supplier ID:</label>
            <input type="number" id="supplier_id" name="supplier_id" value="<?php echo $item['supplier_id']; ?>" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="<?php echo $item['quantity']; ?>" required>
            
            <label for="price">Price:</label>
            <input type="number" step="0.01" id="price" name="price" value="<?php echo $item['price']; ?>" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required><?php echo $item['description']; ?></textarea>
            
            <input type="submit" value="Update Item">
        </form>
    </div>
</body>
</html>
