<?php include("header.php"); ?>

<?php  
    
    // unset($_SESSION['cart']);
    if ( isset($_POST['meta_id']) ) {
        $_SESSION['cart'][$_POST['meta_id']]=array( 'qty'=> $_POST['qtybutton']  , 'qry' => $_POST['qry'] , 'meta_table'=> $_POST['meta_table'] , 'meta_key'=>$_POST['meta_key']);
    }
    elseif (isset($_GET['remove'])) {
        unset($_SESSION['cart'][$_GET['remove']]);
    }

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>Cart details </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Cart details </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="product-cart-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Image</th>
                                            <th class="product-price">Products Name</th>
                                            <th class="product-name">Price</th>
                                            <th class="product-price">Quantity</th>
                                            <th class="product-quantity">Total</th>
                                            <th class="product-subtotal">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_SESSION['cart'])) {                                            
                                        foreach ($_SESSION['cart'] as $key=>$value) { 
                                        $result = mysqli_query($con,$value['qry']);
                                        $lst = mysqli_fetch_assoc($result);
                                       
                                        $_SESSION['img'] = $lst['img'];
                                        $_SESSION['p_name'] = $lst['title'];
                                        $_SESSION['p_price'] = $lst['price'];
                                            ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="admin/images/<?php echo $lst['img']; ?>" alt="" height="120" width="120"></a>

                                                
                                            </td>
                                            <td class="product-name">
                                                <a href="#"><?php echo $lst['title']; ?></a>
                                            </td>
                                            <td class="product-price"><span class="amount"><?php echo $lst['price']; ?></span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input data-id="<?php echo $key; ?>" class="input-text qty text" type="number" step="1" min="0" value="<?php echo $value['qty']; ?>" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="subtot product-subtotal"><?php echo $lst['price']*$value['qty']; ?>.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="cart.php?remove=<?php echo $key; ?>"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <?php }  
                                        } ?>

                                    </tbody>

                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-shiping-update">
                                <div class="cart-shipping">
                                    <a class="btn-style cr-btn" href="product.php">
                                        <span>continue shopping</span>
                                    </a>
                                </div>
                                <div class="update-checkout-cart">
                                    <div class="update-cart">
                                        <button id="update_cart" class="btn-style cr-btn"><span>update</span></button>
                                    </div>
                                    <!-- <div class="update-cart">
                                        <a class="btn-style cr-btn" href="#">
                                            <span>checkout</span>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <!-- <div class="discount-code">
                                <h4>enter your discount code</h4>
                                <div class="coupon">
                                    <input type="text">
                                    <input class="cart-submit" type="submit" value="enter">
                                </div>
                            </div> -->
                            <!-- <form action="placeorder.php" method="POST">
                                <div class="row">
                                    <input type="radio" class="col-sm-3" name="payment" value="COD" style="height: 17px; margin-left: -45px; "><label class="col-sm-3" style="margin-left: -60px;">Cash on delivery</label>
                                    <input class="col-sm-3" type="radio" name="payment" value="Debit Card" style="height: 17px; margin-left: -45px; "><label class="col-sm-3" style="margin-left: -60px;">Debit Card</label>
                                   
                                </div>
                            </form> -->
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="shop-total">
                                

                                <h3>cart total</h3>
                                <ul>
                                    <li>
                                        sub total
                                        <span class="total_amount">0000</span>
                                    </li>
                                    <li>
                                        tax
                                        <span>0.00</span>
                                    </li>
                                    <li class="order-total">
                                        shipping
                                        <span>0</span>
                                    </li>
                                    <li>
                                        order total
                                        <span class="total_amount">00000</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-btn text-center mb-15">
                                <a href="placeorder.php">Check out</a>
                            </div>
                            <div class="continue-shopping-btn text-center"href="product.php">
                                <a >continue shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".qty").change(function(){
                    var wid = $(this);
                    var price = wid.parent().parent().prev().find(".amount").html();
                    var subtotal = wid.parent().parent().next().html();
                    wid.parent().parent().next().html(parseInt(wid.val())*parseInt(price));
                    set_total();
                });
            
                $("#update_cart").click(function(){
                    $(".qty").filter(function(){
                        var wid=$(this);
                        $.post("cart_update.php",{id:wid.data("id"),val:wid.val()}, function(data,status){
                        });
                        location.reload();
                    });
                });

                function set_total(){
                    var total=0;
                    $(".subtot").filter(function(){
                        total = total+parseInt($(this).html());
                    });
                    $(".total_amount").html(total);
                }
                set_total();
            });
        </script>


<?php include("newsletter.php"); ?>            

<?php include("footer.php"); ?>