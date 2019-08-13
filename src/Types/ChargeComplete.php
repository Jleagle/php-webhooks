<?php
namespace ChargeHive\Webhooks\Types;

use ChargeHive\Webhooks\WebhookFoundation;

class ChargeComplete extends WebhookFoundation
{
  /**
   * Unique ID for the charge that has been completed
   *
   * @var string
   */
  public $chargeUuid;

}
