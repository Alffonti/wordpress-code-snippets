<?php

function redirect_to_checkout_page()
{
  global $woocommerce;
  $redirect_to_checkout = $woocommerce->cart->get_checkout_url();
  return $redirect_to_checkout;
}
