<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<header>
        <div class="nav_container">
            <img src = "./assets/images/logo.png" class="navLogo">
            
            <div class="searchCont">
                <div class="searchBar">
                    <i class="fa-solid fa-magnifying-glass" id="searchIcon"></i>
                    <input type="text" placeholder="Search" class="searchText">
                    <select name="Categories" id="cat">
                        <option>All Categories</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="linkContainer">
                <div class="navLink">
                    <a href="#">
                        <i class="fa-solid fa-message"></i>
                        <p>Support</p>
                    </a>
                </div>
                <div class="navLink">
                    <a href="#">
                        <i class="fa-solid fa-heart"></i>
                        <p>Wishlist</p>
                    </a>
                </div>
                <div class="navLink">
                    <a href="#">
                        <i class="fa-solid fa-message"></i>
                        <p>Support</p>
                    </a>
                </div>
                <div class="navLink">
                    <a href="#">
                        <i class="fa-solid fa-message"></i>
                        <p>Support</p>
                    </a>
                </div>
            </div>

        </div>
    </header>

    <div class="mainContainer">
        <div class="productCard">
            <img src="./assets/images/prod1.png" alt="prod1" class="prodImg">
            <h1 class="prodName">Form Refume</h1>
            <p class="price"></p>
        </div>
    </div>
    
    <script src="nav.js"></script>
</body>
</html>