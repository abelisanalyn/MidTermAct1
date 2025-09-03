<?php

$productNames = ["Wireless Mouse", "Mechanical Keyboard", "USB-C Hub", "Portable Speaker"];
$productPrices = [25.99, 79.99, 34.50, 49.99];

echo "Product Names: " . implode(", ", $productNames) . PHP_EOL;

echo "First product price: ₱" . number_format($productPrices[0], 2) . PHP_EOL;
echo "Last product price: ₱" . number_format($productPrices[count($productPrices) - 1], 2) . PHP_EOL;

echo PHP_EOL;

$featuredProduct = [
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "brand" => "KeyTech",
    "inStock" => true,
    "description" => "High-quality mechanical keyboard with customizable RGB lighting."
];

$featuredProduct["warranty"] = "2 years";

echo "Product: " . $featuredProduct["name"] . PHP_EOL;
echo "Brand: " . $featuredProduct["brand"] . PHP_EOL;
echo "Price: ₱" . number_format($featuredProduct["price"], 2) . PHP_EOL;
echo "In Stock: " . ($featuredProduct["inStock"] ? "Yes" : "No") . PHP_EOL;
echo "Warranty: " . $featuredProduct["warranty"] . PHP_EOL;

echo PHP_EOL;


$catalog = [
    [
        "id" => 1,
        "name" => "Wireless Mouse",
        "price" => 25.99,
        "inStock" => true
    ],
    [
        "id" => 2,
        "name" => "Mechanical Keyboard",
        "price" => 79.99,
        "inStock" => true
    ],
    [
        "id" => 3,
        "name" => "USB-C Hub",
        "price" => 34.50,
        "inStock" => false
    ],
    [
        "id" => 4,
        "name" => "Portable Speaker",
        "price" => 49.99,
        "inStock" => true
    ]
];

echo "--- Full Catalog ---" . PHP_EOL;

foreach ($catalog as $product) {
    echo "Product: " . $product["name"] . " - Price: ₱" . number_format($product["price"], 2) . PHP_EOL;
}
