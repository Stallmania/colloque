<?php
require_once 'header.php';
var_dump($_POST);
?>
<div class="recap">

</div>
    <form action="" method="post" id="payment-form">
        <div class="form-row">
            <div id="card-element" class="form-control">
                    <!-- a Stripe Element will be inserted here. -->
            </div>
                
            <div id="card-errors" role="alert">
                    <!-- Used to display form errors -->
            </div>
        </div>
        <button>Submit Payment</button>
    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./src/js/charge.js"></script>