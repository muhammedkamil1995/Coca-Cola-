<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca-Cola</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/kTc9w8SdYtv5PpGkA1VVz9OYXla8z0ts5RJ7kw6i3QjNNY9Cfp5WuPVx5pumMM9R1mPZwKXu0vCbg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<!-- Bootstrap and other scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/Logo-CocaCola.png" alt="Coca-Cola Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="shop_coke.php">Shop Coke</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Task</a>
                    <div class="dropdown-content">
                        <a href="lab1">Task 1</a>
                        <a href="lab2">Task 2</a>
                        <a href="lab3.php">Task 3</a>
                        <a href="lab4.php">Task 4</a>
                        <a href="lab5.php">Task 5</a>
                        <a href="lab6.php">Task 6</a>
                        <a href="lab7.php">Task 7</a>
                        <a href="lab8/part_c/index.php">Task 8</a>
                        <a href="task9">Task 9</a>
                    </div>
                </li>
            </ul>
            <div class="nav-buttons">
                <div class="search-container">
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </div>
                <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </nav>
    </header>



    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="js/slideshow.js"></script>


    <script>
    // JavaScript to toggle the navigation menu on mobile
    function toggleNav() {
        var nav = document.getElementById("main-nav");
        nav.classList.toggle("show-nav");
    }

    // JavaScript to toggle dropdown on click
    document.querySelector('.dropbtn').addEventListener('click', function() {
        this.nextElementSibling.classList.toggle('show');
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>

</body>