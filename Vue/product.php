<?php 
require "header.php"
?>
<link rel="stylesheet" href="./CSS/product.css">

<main class="mainprod">
    <div class="box-img">
        <div class="side-box">
            <div class="other-img"><a href=""><img class="responsive" src="https://dummyimage.com/300x300/000/fff&text=Image+2" alt=""></a></div>
            <div class="other-img"><a href=""><img class="responsive" src="https://dummyimage.com/300x300/000/fff&text=Image+3" alt=""></a></div>
            <div class="other-img"><a href=""><img class="responsive" src="https://dummyimage.com/300x300/000/fff&text=Image+4" alt=""></a></div>
        </div>
        <div class="main-box">
            <img class="responsive product-img" src="../img/bread.jpg" alt="">
        </div>
        
    </div>
    <div class="product-details">
        <h1>Product's title</h1>
        <br>
        <p class="price">£10.00</p>
        <br>
        <p class="availability">Availability : In stock</p>
        <br>
        <table class="price-table">
            <thead>
                <tr>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Price per unit
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>£10</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>£9</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>£8</td>
                </tr>
                <tr>
                    <td>1000</td>
                    <td>£7</td>
                </tr>
                <tr>
                    <td>2000</td>
                    <td>£6</td>
                </tr>
                
            </tbody>
        </table>
        <div class="add">
            <div class="div-buttonLeft">
                <button class="buttonLeft">-</button>
            </div>
            <div class="number">
                <input type="text">
            </div>
            <div class="div-buttonRight">
                <button class="buttonRight">+</button>
            </div>
        </div>
    </div>
























</main>


<?php require "footer.php" ?>