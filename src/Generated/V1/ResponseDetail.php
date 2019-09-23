<?php
namespace ChargeHive\Webhooks\Generated\V1;

use ChargeHive\Webhooks\WebhookFoundation;

class ResponseDetail extends WebhookFoundation
{
  /**
   * Return code generated by ChargeHive
   *
   * @var string
   */
  public $responseCode;

  /**
   * Consumer safe message
   *
   * @var string
   */
  public $consumerMessage;

  /**
   * Internal message for merchants to use
   *
   * @var string
   */
  public $merchantMessage;

  const FAILURE_TYPE_NONE = "NONE";
  const FAILURE_TYPE_SOFT = "SOFT";
  const FAILURE_TYPE_HARD = "HARD";
  const FAILURE_TYPE_RETRY = "RETRY";
  const FAILURE_TYPE_INTERNAL = "INTERNAL";
  public $failureType;

  /**
   * Original response code, usually generated by a connector
   *
   * @var string
   */
  public $originatingCode;

}
