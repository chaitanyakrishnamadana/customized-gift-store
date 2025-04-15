<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Categories - Giftly</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animations.css">
    <style>
        .categories-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            margin-top: 80px; /* Add space for fixed navbar */
        }

        .categories-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .categories-header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .categories-header p {
            color: var(--light-text);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .category-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .category-card h3 {
            padding: 1.5rem 1.5rem 0.5rem;
            font-size: 1.5rem;
        }

        .category-card p {
            padding: 0 1.5rem 1.5rem;
            color: var(--light-text);
            flex-grow: 1;
        }

        .category-link {
            display: block;
            padding: 1rem 1.5rem;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            text-align: center;
            font-weight: 500;
            transition: var(--transition);
            margin-top: auto;
        }

        .category-link:hover {
            background-color: var(--accent-color);
        }

        @media (max-width: 768px) {
            .category-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <main class="categories-container">
        <div class="categories-header fade-in">
            <h1>Our Gift Categories</h1>
            <p>Choose from our wide range of customizable gifts to create something truly special</p>
        </div>

        <div class="category-grid">
            <div class="category-card fade-in">
                <img src="https://images.unsplash.com/photo-1611591437281-460bfbe1220a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Personalized Jewelry">
                <h3>Personalized Jewelry</h3>
                <p>Custom name pendants, engraved rings, and personalized bracelets</p>
                <a href="customize.php?product_id=4" class="category-link">Customize Now</a>
            </div>

            <div class="category-card slide-in-left">
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Custom Notebooks">
                <h3>Custom Notebooks</h3>
                <p>Personalized notebooks with names, quotes, or custom designs</p>
                <a href="customize.php?product_id=5" class="category-link">Customize Now</a>
            </div>

            <div class="category-card slide-in-right">
                <img src="https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Engraved Pens">
                <h3>Engraved Pens</h3>
                <p>Elegant pens with custom text or names</p>
                <a href="customize.php?product_id=6" class="category-link">Customize Now</a>
            </div>

            <div class="category-card scale-up">
                <img src="https://images.unsplash.com/photo-1614094082869-cd4e4b2905c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Personalized Keychains">
                <h3>Personalized Keychains</h3>
                <p>Custom keychains with names, initials, or special messages</p>
                <a href="customize.php?product_id=1" class="category-link">Customize Now</a>
            </div>

            <div class="category-card bounce-in">
                <img src="https://images.unsplash.com/photo-1577937927133-66ef06acdf18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Customized Mugs">
                <h3>Customized Mugs</h3>
                <p>Personalized mugs with names, quotes, or custom designs</p>
                <a href="customize.php?product_id=2" class="category-link">Customize Now</a>
            </div>

            <div class="category-card rotate-in">
                <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Personalized Wall Art">
                <h3>Personalized Wall Art</h3>
                <p>Custom canvas prints with names, quotes, or special dates</p>
                <a href="customize.php?product_id=7" class="category-link">Customize Now</a>
            </div>

            <div class="category-card fade-in">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Customized T-Shirts">
                <h3>Customized T-Shirts</h3>
                <p>Personalized t-shirts with custom text or designs</p>
                <a href="customize.php?product_id=8" class="category-link">Customize Now</a>
            </div>

            <div class="category-card slide-in-left">
                <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Engraved Watches">
                <h3>Engraved Watches</h3>
                <p>Luxury watches with personalized engravings</p>
                <a href="customize.php?product_id=9" class="category-link">Customize Now</a>
            </div>

            <div class="category-card slide-in-right">
                <img src="https://images.unsplash.com/photo-1567225557594-88d73e55f2cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Personalized Cushions">
                <h3>Personalized Cushions</h3>
                <p>Custom cushions with names, quotes, or special messages</p>
                <a href="customize.php?product_id=3" class="category-link">Customize Now</a>
            </div>

            <div class="category-card scale-up">
                <img src="https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Customized Bottles">
                <h3>Customized Bottles</h3>
                <p>Personalized water bottles with names or custom designs</p>
                <a href="customize.php?product_id=10" class="category-link">Customize Now</a>
            </div>

            <div class="category-card bounce-in">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Personalized Bags">
                <h3>Personalized Bags</h3>
                <p>Custom bags with names, initials, or special messages</p>
                <a href="customize.php?product_id=11" class="category-link">Customize Now</a>
            </div>

            <div class="category-card rotate-in">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&h=300&q=80" alt="Customized Phone Cases">
                <h3>Customized Phone Cases</h3>
                <p>Personalized phone cases with names or custom designs</p>
                <a href="customize.php?product_id=12" class="category-link">Customize Now</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content fade-in">
            <div class="footer-links">
                <div class="footer-section slide-in-left">
                    <h3>About Giftly</h3>
                    <a href="about.php">Our Story</a>
                    <a href="#">Careers</a>
                    <a href="#">Press</a>
                </div>
                <div class="footer-section fade-in">
                    <h3>Customer Service</h3>
                    <a href="contact.php">Contact Us</a>
                    <a href="#">Shipping Info</a>
                    <a href="#">Returns</a>
                </div>
                <div class="footer-section slide-in-right">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <p class="copyright">&copy; 2024 Giftly. All rights reserved.</p>
        </div>
    </footer>

    <script src="animations.js"></script>
</body>
</html>