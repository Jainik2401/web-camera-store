<?php include("header.php"); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/slider/back.gif)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center" style="margin-top: -80px;">
                        <h2>My Orders</h2>
                        <ul>
                            <li>
                                <a href="index.php">home</a>
                            </li>
                            <li>My Orders</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="product-cart-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">

                                <?php  

                                    $qry = "SELECT * FROM order_meta WHERE user_id=".$_SESSION['u_id'];
                                    $result = mysqli_query($con, $qry);
                                    // $lst = mysqli_fetch_assoc($result); 

                                ?>

                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                        <?php while($lst = mysqli_fetch_assoc($result)){ ?>
                                        <tr>
                                             <td class="product-thumbnail">
                                                <a href="#"><img src="admin/images/<?php echo $lst['image']; ?>" alt="" height="120" width="120"></a>
                                            </td>
                                            
                                            <td class="product-name">
                                                <a href="#"><?php echo $lst['product_name']; ?></a>
                                            </td>
                                            <td class="product-price"><span class="amount"><?php echo $lst['price']; ?></span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <label><?php echo $lst['qty']; ?></label>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><?php echo $lst['total']; ?></td>
                                            <td class="product-cart-icon product-subtotal"><a href="order_process.php?delete=1&id=<?php echo $lst['order_id']; ?>"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <?php } ?>
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