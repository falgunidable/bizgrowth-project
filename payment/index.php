<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accept a payment</title>
    <link rel="stylesheet" href="./checkout.css" />
    <script src="https://js.stripe.com/v3/"></script>
    <script src="checkout.js" defer></script>
  </head>
  <body>
    <!-- Display a payment form -->
    <form id="payment-form">
      <div id="link-authentication-element">
        <!--Stripe.js injects the Link Authentication Element-->
      </div>
      <div id="payment-element">
        <!--Stripe.js injects the Payment Element-->
      </div>
      <!-- <input name="name" value="" /> -->
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
      </button>
      <div id="payment-message" class="hidden"></div>
    </form>
  </body>
</html>