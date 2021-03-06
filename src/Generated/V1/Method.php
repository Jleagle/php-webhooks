<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class Method extends WebhookFoundation
{
  /**
   * Unique ID for the payment method
   *
   * @var string
   */
  public $id;

  /**
   * Version assigned to the payment method
   *
   * @var string
   */
  public $version;

  /**
   * Name assigned to the method, either provided or calculated
   *
   * @var string
   */
  public $name;

  /**
   * Payment Scheme for the method, e.g. card_visa, paypal_business
   *
   * @var string
   */
  public $paymentScheme;

  /**
   * Unix timestamp of the valid from date for this merthod
   *
   * @var number
   */
  public $validFrom;

  /**
   * Unix timestamp of the expiry date for this merthod
   *
   * @var number
   */
  public $expiry;

  const TYPE_CARD = "CARD";
  const TYPE_PAYPAL = "PAYPAL";
  /**
   * Payment method type
   *
   */
  public $type;

  /**
   * Additional information about this payment method
   *
   * @var object
   */
  public $info;

}
