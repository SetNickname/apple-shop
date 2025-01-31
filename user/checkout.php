<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="icon" href="../assets/apple.png">
    <link rel="stylesheet" href="./checkout-product.css">
    <link rel="stylesheet" href="../admin/style.css">

</head>
<body>
    <?php 
        //links
        $checkout = "./checkout.js";

    ?>
    <div class="header">
        <h2 class="order-title">Checkout</h2>
        <a href="#" class="close-btn" id="close-order-btn">
        X
        </a>
    </div>
    <div class="main">
        <div class="column ship-pay"> 
            <section class="row ship-address"> 
                <h3>Shipping Address</h3>
                <form>
                    <div class="details">
                        <div class="input-box name">
                            <input type="text" name="name" id="name" required>
                            <label>Name</label>
                        </div>
                        <div class="input-box num">
                            <input type="text" name="num" id="num" required>
                            <label>Mobile Number</label>
                        </div>
                    </div>
                    <div class="details">
                        <div class="input-box address">
                            <input type="text" name="address" id="address" required>
                            <label>Address</label>
                        </div>
                        <div class="input-box city">
                            <input type="text" name="city" id="city" required>
                            <label>City</label>
                        </div>
                    </div>
                    <div class="details">
                        <div class="input-box country">
                            <input type="text" name="state" id="state" required>
                            <label>Country</label>
                        </div>
                        <div class="input-box zip">
                            <input type="text" name="zip" id="zip" required>
                            <label>Zip</label>
                        </div>
                    </div>
                </form>
            </section>
            <section class="row payment">
                <h3>Payment Method</h3>
                <div class="payment-methods" id="cod-btn">
                    <button class="payment-button active">
                        <img src="../assets/cash.png" alt="">
                        COD
                    </button>
                    <button class="payment-button" id="card-btn">
                        <img src="../assets/credit.png" alt="">
                        Card
                    </button>
                </div>                
                <form action="", id="payment-form">
                    <div id="card-pay-details" style="display: none;">
                        <div class="card-details">
                            <div class="input-box name-card">
                                <input type="text" name="card-name" id="card-name" required>
                                <label>Name on Card</label>
                            </div>
                            <div class="input-box cvv">
                                <input type="text" name="cvv" id="cvv" required>
                                <label>CVV</label>
                            </div>
                        </div> 
                        <div class="card-details">
                            <div class="input-box card-num">
                                <input type="text" name="card-num" id="card-num" required>
                                <label>Card Number</label>
                            </div> 
                            <div class="expiry">
                                <label for="expiry">Expiry:</label> 
                                <select id="month" name="month"> 
                                    <option value="" disabled selected>MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option> 
                                </select>
                                <select id="year" name="year">
                                    <option value="" disabled selected>YYYY</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>    
                                </select>                             
                            </div>                   
                        </div>
                    </div>
                    <div id="cod-details">
                        <p class="cod-mess">Cash on Delivery: Ensure you have the correct amount ready when your order arrives.</p>
                    </div>
                </form>
            </section>
        </div>
        <div class="column order-sum">
            <section>
                <h3 class="ord-sum">Order Summary</h3>
                <div>
                    <div class="cart-prod-grid">
                        <div class="cart-prod-card">
                            <div class="cart-prod-info-grid">
                                <div class="cart-prod-icon">
                                    <img class="cart-prod-pic" 
                                    src="../assets/prod11.png">
                                </div>
        
                                <div class="cart-prod-info">
                                    <div class="cart-prod-name">iPhone 14 Plus</div>
                                    <div class="cart-prod-variation">Purple &#183; 128GB</div>
                                    <div class="cart-prod-qty">Qty: 1</div>
                                    <div class="cart-prod-price">$599.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="totals">
                        <p>Subtotal:
                            <span>$599.00</span>
                        </p>
                        <p>Shipping:
                            <span>$5.00</span>
                        </p>
                        <p>Tax:
                            <span>$3.00</span>
                        </p>
                        <hr>
                        <p> Total:
                            <span>$607.00</span>
                        </p>
                    </div>      
                </div>
                <a href="#" class="place-btn" id="place-order-btn">
                    Place Order
                </a>
            </section>
        </div>
    </div>
    <div id="notification" class="hidden">
        <span>&#10004;</span> <!-- Check icon -->
        Order Placed!
    </div>

    <script src="<?php echo $checkout; ?>"></script>
</body>
</html>