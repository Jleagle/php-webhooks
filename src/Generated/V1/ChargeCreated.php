<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeCreated extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been created
   *
   * @var string
   */
  public $chargeUuid;

  const CHARGE_INTENT_METHOD_ADD = "METHOD_ADD";
  const CHARGE_INTENT_METHOD_REFRESH = "METHOD_REFRESH";
  const CHARGE_INTENT_METHOD_VERIFY = "METHOD_VERIFY";
  const CHARGE_INTENT_CAPTURE = "CAPTURE";
  const CHARGE_INTENT_REFUND = "REFUND";
  /**
   * The intent of this charge
   *
   * @var string
   */
  public $chargeIntent;

  const CONTRACT_NONE = "NONE";
  const CONTRACT_PAYMENT = "PAYMENT";
  const CONTRACT_SUBSCRIPTION_INITIAL = "SUBSCRIPTION_INITIAL";
  const CONTRACT_SUBSCRIPTION_RENEWAL = "SUBSCRIPTION_RENEWAL";
  const CONTRACT_ONECLICK = "ONECLICK";
  public $contract;

  /**
   * @var Money
   */
  public $amount;

  /**
   * A keyed array of references assigned to the charge
   *
   * @var object
   */
  public $references;

  /**
   * Expiry time of the charge, output as the number of seconds since unix epoch
   *
   * @var number
   */
  public $expiryTime;

  /**
   * Unique reference for this charge, as defined by the merchant
   *
   * @var string
   */
  public $merchantReference;

  protected function _set($property, $value)
  {
    if($property == 'amount')
    {
      $this->amount = Money::fromSource($value);
      return;
    }

    parent::_set($property, $value);
  }
}
