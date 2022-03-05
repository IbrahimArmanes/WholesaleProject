<?php 
require "header.php"
?>
<link rel="stylesheet" href="./CSS/category.css">

<main class="maincat">
    <div class="sidebar">
        <div class="category-box">
            <h3>Categories</h3>
            <br>
            <ul class="category-list">
                <li><a href="#">Category 1</a> <button id="show1"><b>+</b> </button>
                    <ul class="" id="subcategory-list1">
                        <li><a href="#">Subcategory 1.2</a></li>
                        <li><a href="#">Subcategory 1.3</a></li>
                        <li><a href="#">Subcategory 1.4</a></li>
                        <li><a href="#">Subcategory 1.5</a></li>
                    </ul>
                    
                </li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a> <button id="show2"><b>+</b></button>
                    <ul class="" id="subcategory-list2">
                        <li><a href="#">Subcategory 4.2</a></li>
                        <li><a href="#">Subcategory 4.3</a></li>
                        <li><a href="#">Subcategory 4.4</a></li>
                        <li><a href="#">Subcategory 4.5</a></li>
                    </ul>
                    
                </li>
                <li><a href="#">Category 5</a></li>
            </ul>
        </div>


    </div>
    <div class="title">
        <h2>Category - Subcategory</h2>


    </div>
    <div class="topbar">

        <input type="text"> <button>Filter</button>

    </div>
    <div class="products">

        <div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div>
        <div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div><div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div>
        <div class="product">
            <a href="#"><img class="responsive" src="../img/bread.jpg" alt=""></a>
            <a href="#">Bread</a>
            <h4>10.00£</h4>
        </div>
    </div>












</main>




<script src="./JS/category.js"></script>





<?php require "footer.php" ?>