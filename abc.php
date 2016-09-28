<script src="https://cdn.shopify.com/s/assets/external/app.js"></script>
  <script type="text/javascript">
    ShopifyApp.init({
      apiKey: '65394bcb4a6a92f4f8c5220a8e5b7295',
      shopOrigin: 'https://pkds-2.myshopify.com',
      debug: false,
      forceRedirect: true
    });
    ShopifyApp.ready(function(){
  		ShopifyApp.flashNotice("Unicorn was created successfully.");
	});
  </script>


<?php
	session_start();

	require __DIR__.'/vendor/autoload.php';
	use phpish\shopify;

	require __DIR__.'/conf.php';

	$shopify = shopify\client($_SESSION['shop'], SHOPIFY_APP_API_KEY, $_SESSION['oauth_token']);

	echo 'Hello World..!!';