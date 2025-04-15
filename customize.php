<?php
session_start();
// Sample product data - in a real application, this would come from a database
$products = [
    1 => [
        'name' => 'Personalized Keychain',
        'description' => 'Custom keychain with engraved text',
        'base_price' => 9.99,
        'image' => 'https://images.unsplash.com/photo-1614094082869-cd4e4b2905c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 20
            ],
            'color' => [
                'name' => 'Keychain Color',
                'price_adjustment' => 2.00,
                'options' => ['Silver', 'Gold', 'Rose Gold']
            ]
        ]
    ],
    2 => [
        'name' => 'Customized Mug',
        'description' => 'Personalized mug with custom design',
        'base_price' => 14.99,
        'image' => 'https://images.unsplash.com/photo-1577937927133-66ef06acdf18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 30
            ],
            'color' => [
                'name' => 'Mug Color',
                'price_adjustment' => 1.50,
                'options' => ['White', 'Black', 'Blue']
            ],
            'size' => [
                'name' => 'Mug Size',
                'price_adjustment' => 2.00,
                'options' => ['Small', 'Medium', 'Large']
            ]
        ]
    ],
    3 => [
        'name' => 'Personalized Cushion',
        'description' => 'Custom cushion with printed design',
        'base_price' => 24.99,
        'image' => 'https://images.unsplash.com/photo-1567225557594-88d73e55f2cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 50
            ],
            'color' => [
                'name' => 'Cushion Color',
                'price_adjustment' => 3.00,
                'options' => ['Red', 'Blue', 'Green', 'Yellow']
            ],
            'size' => [
                'name' => 'Cushion Size',
                'price_adjustment' => 5.00,
                'options' => ['Small (12x12)', 'Medium (16x16)', 'Large (20x20)']
            ]
        ]
    ],
    4 => [
        'name' => 'Personalized Jewelry',
        'description' => 'Custom jewelry with engraved text',
        'base_price' => 29.99,
        'image' => 'https://images.unsplash.com/photo-1611591437281-460bfbe1220a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 15
            ],
            'material' => [
                'name' => 'Jewelry Material',
                'price_adjustment' => 5.00,
                'options' => ['Silver', 'Gold', 'Rose Gold']
            ],
            'style' => [
                'name' => 'Jewelry Style',
                'price_adjustment' => 3.00,
                'options' => ['Classic', 'Modern', 'Vintage']
            ]
        ]
    ],
    5 => [
        'name' => 'Custom Notebooks',
        'description' => 'Personalized notebooks with custom design',
        'base_price' => 12.99,
        'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 40
            ],
            'cover' => [
                'name' => 'Cover Material',
                'price_adjustment' => 2.00,
                'options' => ['Leather', 'Hardcover', 'Softcover']
            ],
            'size' => [
                'name' => 'Notebook Size',
                'price_adjustment' => 1.50,
                'options' => ['A5', 'A4', 'B5']
            ]
        ]
    ],
    6 => [
        'name' => 'Engraved Pens',
        'description' => 'Custom engraved pens',
        'base_price' => 19.99,
        'image' => 'https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 20
            ],
            'material' => [
                'name' => 'Pen Material',
                'price_adjustment' => 3.00,
                'options' => ['Metal', 'Wood', 'Acrylic']
            ],
            'style' => [
                'name' => 'Pen Style',
                'price_adjustment' => 2.00,
                'options' => ['Ballpoint', 'Fountain', 'Rollerball']
            ]
        ]
    ],
    7 => [
        'name' => 'Personalized Wall Art',
        'description' => 'Custom wall art with your design',
        'base_price' => 39.99,
        'image' => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 100
            ],
            'size' => [
                'name' => 'Art Size',
                'price_adjustment' => 10.00,
                'options' => ['Small (8x10")', 'Medium (11x14")', 'Large (16x20")']
            ],
            'style' => [
                'name' => 'Art Style',
                'price_adjustment' => 5.00,
                'options' => ['Canvas', 'Framed Print', 'Metal Print']
            ]
        ]
    ],
    8 => [
        'name' => 'Customized T-Shirts',
        'description' => 'Personalized t-shirts with custom design',
        'base_price' => 24.99,
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 30
            ],
            'size' => [
                'name' => 'T-Shirt Size',
                'price_adjustment' => 0,
                'options' => ['S', 'M', 'L', 'XL', 'XXL']
            ],
            'color' => [
                'name' => 'T-Shirt Color',
                'price_adjustment' => 0,
                'options' => ['White', 'Black', 'Gray', 'Navy']
            ]
        ]
    ],
    9 => [
        'name' => 'Engraved Watches',
        'description' => 'Custom engraved watches',
        'base_price' => 49.99,
        'image' => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 20
            ],
            'material' => [
                'name' => 'Watch Material',
                'price_adjustment' => 10.00,
                'options' => ['Stainless Steel', 'Gold Plated', 'Rose Gold']
            ],
            'style' => [
                'name' => 'Watch Style',
                'price_adjustment' => 5.00,
                'options' => ['Classic', 'Modern', 'Sport']
            ]
        ]
    ],
    10 => [
        'name' => 'Customized Bottles',
        'description' => 'Personalized water bottles',
        'base_price' => 19.99,
        'image' => 'https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 25
            ],
            'material' => [
                'name' => 'Bottle Material',
                'price_adjustment' => 3.00,
                'options' => ['Stainless Steel', 'Plastic', 'Glass']
            ],
            'size' => [
                'name' => 'Bottle Size',
                'price_adjustment' => 2.00,
                'options' => ['Small (500ml)', 'Medium (750ml)', 'Large (1L)']
            ]
        ]
    ],
    11 => [
        'name' => 'Personalized Bags',
        'description' => 'Custom bags with your design',
        'base_price' => 34.99,
        'image' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 30
            ],
            'style' => [
                'name' => 'Bag Style',
                'price_adjustment' => 5.00,
                'options' => ['Tote', 'Backpack', 'Shoulder Bag']
            ],
            'color' => [
                'name' => 'Bag Color',
                'price_adjustment' => 2.00,
                'options' => ['Black', 'Brown', 'Navy', 'Gray']
            ]
        ]
    ],
    12 => [
        'name' => 'Customized Phone Cases',
        'description' => 'Personalized phone cases',
        'base_price' => 14.99,
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80',
        'options' => [
            'text' => [
                'name' => 'Custom Text',
                'price_adjustment' => 0,
                'max_length' => 20
            ],
            'material' => [
                'name' => 'Case Material',
                'price_adjustment' => 2.00,
                'options' => ['Silicone', 'Hard Plastic', 'Leather']
            ],
            'style' => [
                'name' => 'Case Style',
                'price_adjustment' => 1.50,
                'options' => ['Minimal', 'Pattern', 'Photo']
            ]
        ]
    ]
];

$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;
$product = isset($products[$product_id]) ? $products[$product_id] : null;

if (!$product) {
    header("Location: categories.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize <?php echo htmlspecialchars($product['name']); ?> - CustomizedGift</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animations.css">
    <style>
        :root {
            --primary-color: #4a6bff;
            --primary-light: #e8edff;
            --secondary-color: #6c757d;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
            --success-color: #28a745;
            --border-radius: 12px;
            --box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: #333;
            line-height: 1.6;
            padding-top: 80px; /* Space for fixed navbar */
        }

        .customize-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
        }

        .product-preview {
            background: #fff;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            position: sticky;
            top: 100px;
            height: fit-content;
            transition: var(--transition);
        }

        .product-preview:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .product-image-container {
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius);
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .product-preview img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .product-preview img:hover {
            transform: scale(1.05);
        }

        .preview-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: var(--transition);
        }

        .product-image-container:hover .preview-overlay {
            opacity: 1;
        }

        .preview-text {
            color: white;
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            padding: 1rem;
            max-width: 80%;
        }

        .product-preview h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: var(--dark-bg);
            font-weight: 600;
        }

        .product-preview p {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .product-price i {
            margin-right: 0.5rem;
            color: var(--accent-color);
        }

        .customization-options {
            background: #fff;
            padding: 2.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .customization-options h2 {
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
            color: var(--dark-bg);
            font-size: 1.8rem;
            font-weight: 600;
        }

        .option-group {
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: var(--border-radius);
            background-color: var(--light-bg);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .option-group::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary-color);
            opacity: 0;
            transition: var(--transition);
        }

        .option-group:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transform: translateX(5px);
        }

        .option-group:hover::before {
            opacity: 1;
        }

        .option-group.active {
            background-color: var(--primary-light);
            box-shadow: 0 4px 12px rgba(74, 107, 255, 0.1);
        }

        .option-group.active::before {
            opacity: 1;
        }

        .option-group label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 500;
            color: var(--dark-bg);
            font-size: 1.1rem;
        }

        .option-group input[type="text"],
        .option-group select {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            margin-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
            font-size: 1rem;
        }

        .option-group input[type="text"]:focus,
        .option-group select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(74, 107, 255, 0.2);
        }

        .option-group small {
            display: block;
            color: var(--secondary-color);
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        .price-adjustment {
            color: var(--accent-color);
            font-weight: 500;
            margin-left: 0.5rem;
            font-size: 0.9rem;
        }

        .price-summary {
            margin-top: 2.5rem;
            padding: 1.5rem;
            background: var(--light-bg);
            border-radius: var(--border-radius);
            border: 1px solid #eee;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .price-summary p {
            margin: 0.75rem 0;
            display: flex;
            justify-content: space-between;
            font-size: 1.1rem;
        }

        .total-price {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--dark-bg);
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }

        .buy-now-btn {
            width: 100%;
            padding: 1.2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 500;
            margin-top: 2rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(74, 107, 255, 0.3);
        }

        .buy-now-btn i {
            margin-right: 0.75rem;
            font-size: 1.3rem;
        }

        .buy-now-btn:hover {
            background: #3a5bef;
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(74, 107, 255, 0.4);
        }

        .buy-now-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(74, 107, 255, 0.3);
        }

        .color-options, .size-options {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 0.75rem;
        }

        .color-option, .size-option {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: var(--transition);
            position: relative;
        }

        .color-option:hover, .size-option:hover {
            transform: scale(1.15);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .color-option.selected, .size-option.selected {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px white, 0 0 0 4px var(--primary-color);
        }

        .size-option {
            width: auto;
            height: auto;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .size-option.selected {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .progress-container {
            margin-bottom: 2.5rem;
        }

        .progress-bar {
            height: 8px;
            background-color: #eee;
            border-radius: 4px;
            margin-bottom: 1rem;
            overflow: hidden;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .progress-fill {
            height: 100%;
            background-color: var(--primary-color);
            width: 0%;
            transition: width 0.5s ease;
            border-radius: 4px;
        }

        .steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            flex: 1;
            z-index: 2;
        }

        .step:not(:last-child):after {
            content: '';
            position: absolute;
            top: 15px;
            left: 50%;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            z-index: 1;
        }

        .step-number {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #ddd;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 0.75rem;
            z-index: 2;
            transition: var(--transition);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .step.active .step-number {
            background-color: var(--primary-color);
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(74, 107, 255, 0.3);
        }

        .step.completed .step-number {
            background-color: var(--success-color);
            box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3);
        }

        .step-label {
            font-size: 0.9rem;
            color: var(--secondary-color);
            font-weight: 500;
            transition: var(--transition);
        }

        .step.active .step-label {
            color: var(--primary-color);
            font-weight: 600;
        }

        .step.completed .step-label {
            color: var(--success-color);
        }

        .notification {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--success-color);
            color: white;
            padding: 1.2rem 1.8rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            display: flex;
            align-items: center;
            z-index: 1000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            max-width: 350px;
        }

        .notification.show {
            transform: translateY(0);
            opacity: 1;
        }

        .notification i {
            margin-right: 0.75rem;
            font-size: 1.5rem;
        }

        .close-notification {
            margin-left: 1rem;
            cursor: pointer;
            opacity: 0.8;
            transition: var(--transition);
        }

        .close-notification:hover {
            opacity: 1;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            margin-left: 0.5rem;
            color: var(--secondary-color);
            cursor: help;
        }

        .tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: var(--dark-bg);
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 0.75rem;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.85rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .tooltip .tooltip-text::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: var(--dark-bg) transparent transparent transparent;
        }

        .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

        .help-text {
            font-size: 0.9rem;
            color: var(--secondary-color);
            margin-top: 0.5rem;
            font-style: italic;
        }

        @media (max-width: 992px) {
            .customize-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .product-preview {
                position: relative;
                top: 0;
            }
        }

        @media (max-width: 768px) {
            .steps {
                flex-direction: column;
                align-items: flex-start;
            }

            .step {
                margin-bottom: 1.5rem;
                width: 100%;
            }

            .step:not(:last-child):after {
                display: none;
            }

            .option-group {
                padding: 1.2rem;
            }

            .customization-options {
                padding: 1.5rem;
            }

            .notification {
                left: 1rem;
                right: 1rem;
                max-width: none;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-up {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .scale-up.visible {
            opacity: 1;
            transform: scale(1);
        }

        .rotate-in {
            opacity: 0;
            transform: rotate(-10deg);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .rotate-in.visible {
            opacity: 1;
            transform: rotate(0);
        }

        .bounce-in {
            opacity: 0;
            transform: scale(0.3);
            transition: opacity 0.6s ease-out, transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .bounce-in.visible {
            opacity: 1;
            transform: scale(1);
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }

        .glow {
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 0 5px rgba(255, 255, 255, 0.5); }
            to { box-shadow: 0 0 20px rgba(255, 255, 255, 0.8); }
        }

        /* Hover Animations */
        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-rotate {
            transition: transform 0.3s ease;
        }

        .hover-rotate:hover {
            transform: rotate(5deg);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Loading Animation */
        .loading {
            position: relative;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        .loading::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 30px;
            margin: -15px 0 0 -15px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            z-index: 1;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="customize-container">
        <div class="product-preview fade-in">
            <div class="product-image-container">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                <div class="preview-overlay">
                    <div class="preview-text">Your customizations will appear here</div>
                </div>
            </div>
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <div class="product-price">
                <i class="fas fa-tag"></i> Base Price: $<?php echo number_format($product['base_price'], 2); ?>
            </div>
        </div>

        <div class="customization-options slide-in-right">
            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                
                <div class="steps">
                    <div class="step active" id="step1">
                        <div class="step-number">1</div>
                        <div class="step-label">Text</div>
                    </div>
                    <div class="step" id="step2">
                        <div class="step-number">2</div>
                        <div class="step-label">Style</div>
                    </div>
                    <div class="step" id="step3">
                        <div class="step-number">3</div>
                        <div class="step-label">Review</div>
                    </div>
                </div>
            </div>
            
            <h2>Customization Options</h2>
            <form id="customizationForm">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <?php 
                $step = 1;
                foreach ($product['options'] as $key => $option): 
                ?>
                    <div class="option-group" data-step="<?php echo $step; ?>" <?php echo $step === 1 ? 'class="option-group active"' : ''; ?>>
                        <label for="<?php echo $key; ?>">
                            <?php echo htmlspecialchars($option['name']); ?>
                            <?php if ($option['price_adjustment'] > 0): ?>
                                <span class="price-adjustment">(+$<?php echo number_format($option['price_adjustment'], 2); ?>)</span>
                            <?php endif; ?>
                            <span class="tooltip">
                                <i class="fas fa-info-circle"></i>
                                <span class="tooltip-text">This option allows you to customize the <?php echo strtolower($option['name']); ?> of your product.</span>
                            </span>
                        </label>
                        
                        <?php if ($key === 'text'): ?>
                            <input type="text" id="<?php echo $key; ?>" name="<?php echo $key; ?>" maxlength="<?php echo $option['max_length']; ?>" data-price="<?php echo $option['price_adjustment']; ?>" placeholder="Enter your custom text" required>
                            <small>Max <?php echo $option['max_length']; ?> characters</small>
                            <div class="help-text">Enter the text you want to appear on your <?php echo strtolower($product['name']); ?>.</div>
                        
                        <?php elseif ($key === 'color' || $key === 'size'): ?>
                            <div class="<?php echo $key; ?>-options">
                                <?php foreach ($option['options'] as $value): ?>
                                    <div class="<?php echo $key; ?>-option" 
                                         data-value="<?php echo htmlspecialchars($value); ?>"
                                         data-price="<?php echo $option['price_adjustment']; ?>"
                                         <?php if ($key === 'color'): ?>
                                         style="background-color: <?php echo strtolower($value); ?>;"
                                         <?php endif; ?>>
                                        <?php if ($key !== 'color'): ?>
                                            <?php echo htmlspecialchars($value); ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <input type="hidden" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="" required>
                            <div class="help-text">Select your preferred <?php echo strtolower($option['name']); ?> for the <?php echo strtolower($product['name']); ?>.</div>
                        
                        <?php elseif ($key === 'material' || $key === 'style' || $key === 'cover'): ?>
                            <select id="<?php echo $key; ?>" 
                                    name="<?php echo $key; ?>" 
                                    data-price="<?php echo $option['price_adjustment']; ?>" required>
                                <option value="">Select <?php echo $key; ?></option>
                                <?php foreach ($option['options'] as $value): ?>
                                    <option value="<?php echo htmlspecialchars($value); ?>">
                                        <?php echo htmlspecialchars($value); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="help-text">Choose the <?php echo strtolower($option['name']); ?> for your <?php echo strtolower($product['name']); ?>.</div>
                        <?php endif; ?>
                    </div>
                    <?php $step++; ?>
                <?php endforeach; ?>

                <div class="price-summary">
                    <p>Base Price: $<span id="basePrice"><?php echo number_format($product['base_price'], 2); ?></span></p>
                    <p>Customization Total: $<span id="customizationTotal">0.00</span></p>
                    <p class="total-price">Total: $<span id="totalPrice"><?php echo number_format($product['base_price'], 2); ?></span></p>
                </div>

                <button type="submit" class="buy-now-btn">
                    <i class="fas fa-shopping-cart"></i> Buy Now
                </button>
            </form>
        </div>
    </main>

    <div class="notification" id="notification">
        <i class="fas fa-check-circle"></i>
        <span id="notificationMessage">Product added to cart!</span>
        <span class="close-notification" id="closeNotification">
            <i class="fas fa-times"></i>
        </span>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 CustomizedGift. All rights reserved.</p>
        </div>
    </footer>

    <script src="animations.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('customizationForm');
            const basePrice = <?php echo $product['base_price']; ?>;
            let customizationTotal = 0;
            const optionGroups = document.querySelectorAll('.option-group');
            const steps = document.querySelectorAll('.step');
            const progressFill = document.getElementById('progressFill');
            const notification = document.getElementById('notification');
            const notificationMessage = document.getElementById('notificationMessage');
            const closeNotification = document.getElementById('closeNotification');
            
            // Preview elements
            const previewText = document.getElementById('previewText');
            const previewColor = document.getElementById('previewColor');
            const previewSize = document.getElementById('previewSize');
            
            // Initialize the first step
            updateStepVisibility(1);
            updateProgress(1);
            
            // Handle option selection
            document.querySelectorAll('.color-option, .size-option').forEach(option => {
                option.addEventListener('click', function() {
                    const parent = this.parentElement;
                    const options = parent.querySelectorAll(`.${this.classList[0]}`);
                    const inputId = this.classList[0].split('-')[0];
                    const input = document.getElementById(inputId);
                    
                    // Remove selected class from all options
                    options.forEach(opt => opt.classList.remove('selected'));
                    
                    // Add selected class to clicked option
                    this.classList.add('selected');
                    
                    // Update hidden input value
                    input.value = this.dataset.value;
                    
                    // Update price
                    updateTotalPrice();
                    
                    // Update preview
                    updatePreview();
                    
                    // Move to next step if available
                    const currentStep = parseInt(this.closest('.option-group').dataset.step);
                    if (currentStep < optionGroups.length) {
                        updateStepVisibility(currentStep + 1);
                        updateProgress(currentStep + 1);
                    }
                });
            });
            
            // Handle text input
            document.querySelectorAll('input[type="text"]').forEach(input => {
                input.addEventListener('input', function() {
                    updateTotalPrice();
                    updatePreview();
                });
                
                input.addEventListener('blur', function() {
                    const currentStep = parseInt(this.closest('.option-group').dataset.step);
                    if (currentStep < optionGroups.length) {
                        updateStepVisibility(currentStep + 1);
                        updateProgress(currentStep + 1);
                    }
                });
            });
            
            // Handle select dropdowns
            document.querySelectorAll('select').forEach(select => {
                select.addEventListener('change', function() {
                    updateTotalPrice();
                    updatePreview();
                    
                    // Move to next step if available
                    const currentStep = parseInt(this.closest('.option-group').dataset.step);
                    if (currentStep < optionGroups.length) {
                        updateStepVisibility(currentStep + 1);
                        updateProgress(currentStep + 1);
                    }
                });
            });
            
            function updateStepVisibility(activeStep) {
                // Update step indicators
                steps.forEach((step, index) => {
                    if (index + 1 < activeStep) {
                        step.classList.remove('active');
                        step.classList.add('completed');
                    } else if (index + 1 === activeStep) {
                        step.classList.add('active');
                        step.classList.remove('completed');
                    } else {
                        step.classList.remove('active', 'completed');
                    }
                });
                
                // Update option groups
                optionGroups.forEach((group, index) => {
                    if (index + 1 === activeStep) {
                        group.classList.add('active');
                    } else {
                        group.classList.remove('active');
                    }
                });
            }
            
            function updateProgress(step) {
                const progress = ((step - 1) / (optionGroups.length - 1)) * 100;
                progressFill.style.width = `${progress}%`;
            }
            
            function updateTotalPrice() {
                customizationTotal = 0;
                
                // Handle text inputs
                form.querySelectorAll('input[type="text"]').forEach(element => {
                    if (element.value) {
                        customizationTotal += parseFloat(element.dataset.price || 0);
                    }
                });
                
                // Handle color and size options
                form.querySelectorAll('.color-option.selected, .size-option.selected').forEach(element => {
                    customizationTotal += parseFloat(element.dataset.price || 0);
                });
                
                // Handle select dropdowns
                form.querySelectorAll('select').forEach(element => {
                    if (element.value) {
                        customizationTotal += parseFloat(element.dataset.price || 0);
                    }
                });
                
                document.getElementById('customizationTotal').textContent = customizationTotal.toFixed(2);
                document.getElementById('totalPrice').textContent = (basePrice + customizationTotal).toFixed(2);
            }
            
            function updatePreview() {
                // Update text preview
                const textInput = document.getElementById('text');
                if (textInput && textInput.value) {
                    previewText.textContent = textInput.value;
                    previewText.style.display = 'block';
                } else {
                    previewText.style.display = 'none';
                }
                
                // Update color preview
                const colorInput = document.getElementById('color');
                if (colorInput && colorInput.value) {
                    previewColor.style.backgroundColor = colorInput.value.toLowerCase();
                    previewColor.style.display = 'block';
                } else {
                    previewColor.style.display = 'none';
                }
                
                // Update size preview
                const sizeInput = document.getElementById('size');
                if (sizeInput && sizeInput.value) {
                    previewSize.textContent = sizeInput.value;
                    previewSize.style.display = 'block';
                } else {
                    previewSize.style.display = 'none';
                }
            }
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Collect all customization options
                const customizations = {};
                
                // Collect from input elements
                form.querySelectorAll('input').forEach(element => {
                    if (element.value && element.type !== 'hidden') {
                        customizations[element.id] = element.value;
                    }
                });
                
                // Collect from select elements
                form.querySelectorAll('select').forEach(element => {
                    if (element.value) {
                        customizations[element.id] = element.value;
                    }
                });
                
                // Get total price
                const totalPrice = parseFloat(document.getElementById('totalPrice').textContent);
                
                // Create FormData object
                const formData = new FormData();
                formData.append('product_id', document.querySelector('input[name="product_id"]').value);
                formData.append('customizations', JSON.stringify(customizations));
                formData.append('total_price', totalPrice);
                formData.append('action', 'buy_now'); // Add action parameter to indicate direct purchase
                
                // Send data to server
                fetch('process_customization.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Show notification with animation
                    notificationMessage.textContent = data.success ? data.message : 'Error: ' + data.message;
                    notification.classList.add('show');
                    
                    // If purchase was successful, redirect to thank you page
                    if (data.success && data.redirect) {
                        setTimeout(() => {
                            window.location.href = data.redirect;
                        }, 1500);
                    }
                    
                    // Hide notification after 3 seconds if no redirect
                    if (!data.redirect) {
                        setTimeout(() => {
                            notification.classList.remove('show');
                        }, 3000);
                    }
                    
                    // Log the response
                    console.log('Server response:', data);
                })
                .catch(error => {
                    console.error('Error:', error);
                    notificationMessage.textContent = 'Error submitting form. Please try again.';
                    notification.classList.add('show');
                    
                    // Hide notification after 3 seconds
                    setTimeout(() => {
                        notification.classList.remove('show');
                    }, 3000);
                });
            });
            
            closeNotification.addEventListener('click', function() {
                notification.classList.remove('show');
            });

            // Add animation on scroll
            const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-up, .rotate-in, .bounce-in');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            animatedElements.forEach(element => {
                observer.observe(element);
            });

            // Add shake animation to buttons on click
            document.querySelectorAll('.quantity-btn, .add-to-cart-btn, .buy-now-btn').forEach(button => {
                button.addEventListener('click', function() {
                    this.classList.add('shake');
                    setTimeout(() => {
                        this.classList.remove('shake');
                    }, 500);
                });
            });

            // Add pulse animation to price
            const priceElement = document.querySelector('.product-price');
            priceElement.classList.add('pulse');

            // Add float animation to product image
            const mainImage = document.querySelector('.product-image-container img');
            mainImage.classList.add('float');
        });
    </script>
</body>
</html>