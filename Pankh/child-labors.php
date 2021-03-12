<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/donation.png" type="image/x-icon">

    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Child-labors</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>Childocare</h1>
            </div>

            <div class="menu">
                <div class="top-nav">
                    <div class="logo">
                        <h1>Childocare</h1>
                    </div>
                    <div class="close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="NGOs.html" class="nav-link">NGOs</a>
                    </li>
                    <li class="nav-item">
                        <a href="complaints.html" class="nav-link">Complaint section</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Log out</a>
                    </li>
<li class="nav-item">
                        <a href="cart.html" class="nav-link icon"><span class="iconify" data-icon="mdi:charity" data-inline="false"></span></a>
                    </li>
                </ul>
            </div>

            <a href="cart.html" class="cart-icon">
                <span class="iconify" data-icon="mdi:charity" data-inline="false"></span>
            </a>

            <div class="hamburger">
                <i class="bx bx-menu"></i>
            </div>
        </div>
    </nav>

    <!-- All Products -->
    <section class="section all-products" id="products">
        <div class="top container">
            <h1>All NGOs</h1>
            <form>
                <select>
                    <option value="1">Default Sorting</option>
                    <option value="2">Sort By Location</option>
                    <optgroup label="Type">
                    <option value="3">Diseased</option>
                    <option value="4">Handicaped</option>
                    <option value="5">Orphans</option>
                    <option value="6">Food</option>
                    <option value="7">Education</option>
                </optgroup></select>
                <span><i class='bx bx-chevron-down'></i></span>
            </form>
        </div>

        <div class="product-center container">
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo1.jpg" alt="">
                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <a href="product-details.html">
                        <h3>Child1</h3>
                    </a>
   
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo2.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 2</h3>
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo5.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 3</h3>
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo6.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 4</h3>
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo7.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 5</h3>
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo8.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 6</h3>
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/NGO7.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 7</h3>
                    
                    
                </div>
            </div>
            <div class="product">
                <div class="product-header">
                    <img src="./images/childo4.jpg" alt="">

                    <ul class="icons">
                        <span><i class="bx bx-heart"></i></span>
                        
                        <span><i class="bx bx-search"></i></span>
                    </ul>
                </div>
                <div class="product-footer">
                    <h3>Child 8</h3>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="pagination">
        <div class=" container">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span><i class='bx bx-right-arrow-alt'></i></span>
        </div>
    </section>



    <!-- Footer -->
    <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>EXTRAS</h3>
                    <a href="#">NGOs</a>
                    <a href="#">Certificates</a>
                    <a href="#">Affiliate</a>
                    <a href="#">Specials</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>INFORMATION</h3>
                    <a href="#">About Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Site Map</a>
                </div>
                <div class="footer-center">
                    <h3>MY ACCOUNT</h3>
                    <a href="#">My Account</a>
                    <a href="#">Donation History</a>
                    <a href="#">Wish List</a>
       
                </div>
                <div class="footer-center">
                    <h3>CONTACT US</h3>
                    <div>
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        Golapbag
                    </div>
                    <div>
                        <span>
                            <i class="far fa-envelope"></i>
                        </span>
                        MDH@gmail.com
                    </div>
                    <div>
                        <span>
                            <i class="fas fa-phone"></i>
                        </span>
                        890-786-453
                    </div>
                    <div>
                        <span>
                            <i class="far fa-paper-plane"></i>
                        </span>
                        Hostel me hi rehte h
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Custom Script -->
    <script src="./js/index.js"></script>
</body>

</html>