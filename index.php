<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Stripe payment method</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Payment With Stripe</h1>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h2>£ 25.00 / year</h2>
            </div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer text-center">
              <form action="paymentProcess.php?pid=1" method="POST">
                <script
                  src="https://checkout.stripe.com/checkout.js"
                  class="stripe-button"
                  data-key="pk_test_gE4X5iXtaHAnPxku2SBMMBw100mY1YMSsv"
                  data-name="CITY PAGES LTD"
                  data-amount="2500"
                  data-image="https://whatson.guide/wp-content/themes/whatson/images/footer-logo.png"
                  data-currency="GBP">
                </script>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h2>£ 50.00 / year</h2>
            </div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer text-center">
              <form action="paymentProcess.php?pid=2" method="POST">
                <script
                  src="https://checkout.stripe.com/checkout.js"
                  class="stripe-button"
                  data-key="pk_test_gE4X5iXtaHAnPxku2SBMMBw100mY1YMSsv"
                  data-name="CITY PAGES LTD"
                  data-amount="5000"
                  data-image="https://whatson.guide/wp-content/themes/whatson/images/footer-logo.png"
                  data-currency="GBP">
                </script>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h2>£ 75.00 / year</h2>
            </div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer text-center">
              <form action="paymentProcess.php?pid=3" method="POST">
                <script
                  src="https://checkout.stripe.com/checkout.js"
                  class="stripe-button"
                  data-key="pk_test_gE4X5iXtaHAnPxku2SBMMBw100mY1YMSsv"
                  data-name="CITY PAGES LTD"
                  data-amount="7500"
                  data-image="https://whatson.guide/wp-content/themes/whatson/images/footer-logo.png"
                  data-currency="GBP">
                </script>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php $array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array[3]); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>