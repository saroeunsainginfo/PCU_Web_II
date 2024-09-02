<?php
session_start();
include 'db.php';

$sql = "SELECT inventory.*, categories.name AS category_name, suppliers.name AS supplier_name 
        FROM inventory 
        JOIN categories ON inventory.category_id = categories.id 
        JOIN suppliers ON inventory.supplier_id = suppliers.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
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
        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-update {
            background-color: #5cb85c;
            color: white;
        }
        .btn-delete {
            background-color: #d9534f;
            color: white;
        }
        .btn-update:hover {
            background-color: #4cae4c;
        }
        .btn-delete:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Inventory List</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Item Name</th><th>Category</th><th>Supplier</th><th>Quantity</th><th>Price</th><th>Description</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["item_name"]. "</td><td>" . $row["category_name"]. "</td><td>" . $row["supplier_name"]. "</td><td>" . $row["quantity"]. "</td><td>" . $row["price"]. "</td><td>" . $row["description"]. "</td>";
                echo "<td>
                        <a href='update_item.php?id=" . $row["id"] . "' class='btn btn-update'>Update</a>
                        <a href='delete_item.php?id=" . $row["id"] . "' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this item?\")'>Delete</a>
                      </td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
