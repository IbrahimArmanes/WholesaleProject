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
                <li>Category 1 <button id="show1"><b>+</b> </button>
                    <ul class="" id="subcategory-list1">
                        <li>Subcategory 1.1</li>
                        <li>Subcategory 1.2</li>
                        <li>Subcategory 1.3</li>
                        <li>Subcategory 1.4</li>
                    </ul>
                    
                </li>
                <li>Category 2</li>
                <li>Category 3</li>
                <li>Category 4 <button id="show2"><b>+</b></button>
                    <ul class="" id="subcategory-list2">
                        <li>Subcategory 4.1</li>
                        <li>Subcategory 4.2</li>
                        <li>Subcategory 4.3</li>
                        <li>Subcategory 4.4</li>
                    </ul>
                    
                </li>
                <li>Category 5</li>
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

        <div class="product"> <p> <h3>Bread</h3></p> 
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p> 
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p> 
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p> 
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p>  
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p> 
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
        <div class="product"> <p> <h3>Bread</h3></p>  
            <img class="responsive" src="../img/bread.jpg" alt="">
        </div>
    </div>












</main>




<script src="./JS/category.js"></script>





<?php require "footer.php" ?>