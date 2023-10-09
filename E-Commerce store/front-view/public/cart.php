<?php

session_start();
 include("header.php");


?>


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">

            <?php
            $sub_total=0;
            if($_SESSION["cartsession"]== "" || empty($_SESSION["cartsession"])){

                echo"<h1>YOUR CART IS EMPTY</h1>";

            }else{
            
            ?>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">

                    <?php
                    
                        foreach($_SESSION["cartsession"] as $index => $item){

                    ?>
                         <tr>
                            <input type="hidden" value="<?php echo $index ?>" class="index" />
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> <?php echo $item["name"]?></td>
                            <td class="align-middle price"><?php echo $item["Price"]?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus minus-btn">
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="qty form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $item["quantity"]?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus plus-btn" >
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle total"><?php echo $item["total"]?></td>
                            <td class="align-middle"><a href="cart-remove.php?key=<?php echo $index?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                            
                    <?php

$sub_total += $item["total"];
                        }
                     }   
                    //  else end here 
                   
                        ?>
                      
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class=" d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6 class="subtotal"><?php echo $sub_total?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

<?php

include("footer.php");


?>


<script>

$(document).ready(function(){

$(".plus-btn").click(function(){

var quantity= $(this).closest('tr').find(".qty").val();
var price= $(this).closest('tr').find(".price").html();
var subtotal = $(".subtotal").html();


 var per_q =quantity -1;
 var chck=per_q * price;
var subtotal = subtotal - chck;

var result= price * quantity;

var subtotal = subtotal + result;
//  alert (subtotal);
$(".subtotal").html(subtotal);
var index=$(this).closest('tr').find(".index").val();


$(this).closest('tr').find(".total").html(result);

//   alert(index);


  
//ajax start here
$.ajax({
    type:"Post",
    url:"cart-update.php",
    data:{index:index,qty:quantity,total:result},
    success: function(response)
    {
        // alert(response);
    }
   // success function
});
//ajax end here


});

$(".minus-btn").click(function(){

var quantity= $(this).closest('tr').find(".qty").val();
var price= $(this).closest('tr').find(".price").html();



var subtotal = $(".subtotal").html();
per_q =parseInt(quantity) + parseInt(1); 

chck=per_q * price;

var subtotal = subtotal - chck;
var result= price * quantity;
var subtotal = subtotal + result;
$(".subtotal").html(subtotal);
var index=$(this).closest('tr').find(".index").val();


$(this).closest('tr').find(".total").html(result);

//   alert(index);


  
//ajax start here
$.ajax({
    type:"Post",
    url:"cart-update.php",
    data:{index:index,qty:quantity,total:result},
    success: function(response)
    {
        // alert(response);
    }
   // success function
});
//ajax end here


});









})



</script>