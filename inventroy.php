<?php
$products = [
    [
        "Product_Name" => "Laptop",
        "Category" => "Electronics",
        "Price" => 799.99,
        "Stock" => 15
    ],
    [
        "Product_Name" => "Headphones",
        "Category" => "Electronics",
        "Price" => 49.99,
        "Stock" => 7
    ],
    [
        "Product_Name" => "Keyboard",
        "Category" => "Accessories",
        "Price" => 29.99,
        "Stock" => 12
    ],
    [
        "Product_Name" => "Mouse",
        "Category" => "Accessories",
        "Price" => 19.99,
        "Stock" => 5
    ],
    [
        "Product_Name" => "Backpack",
        "Category" => "Bags",
        "Price" => 39.99,
        "Stock" => 20
    ],
    [
        "Product_Name" => "Smart Watch",
        "Category" => "Wearables",
        "Price" => 99.99,
        "Stock" => 8
    ],
    [
        "Product_Name" => "USB Cable",
        "Category" => "Accessories",
        "Price" => 9.99,
        "Stock" => 30
    ],
    [
        "Product_Name" => "Webcam",
        "Category" => "Electronics",
        "Price" => 59.99,
        "Stock" => 6
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Inventory</title>
<style>
h1{
    text-align: center;
}
table{
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}
th, td{
    border: 1px solid lightgray;
    padding: 12px;
}
th{
    background-color: black;
    color: white;
}
tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}
.low-stock{
    color: red;
    font-weight: bold;
}
</style>
</head>
<body>
    <h1>Product Inventory</h1>
    <table>
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
    </thead>
    <tbody>

<?php foreach ($products as $product): ?>
    <?php
$stock = $product["Stock"] < 10 ? "low-stock" : "";
?>
   <tr>
    <td>
    <?php echo htmlspecialchars($product["Product_Name"]); ?>
    </td>
    <td>
<?php echo htmlspecialchars($product["Category"]); ?>
    </td>
    <td>
$<?php echo number_format($product["Price"],2); ?>
    </td>
    <td class="<?php echo $stock; ?>">
<?php echo htmlspecialchars($product["Stock"]); ?>
    </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>