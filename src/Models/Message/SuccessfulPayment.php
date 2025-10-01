<?php

namespace Telemon\Models\Message;

use Telemon\Models\BaseModel;

/**
 * @method string currency()
 * @method int totalAmount()
 * @method string invoicePayload()
 * @method string shippingOptionId()
 * @method OrderInfo orderInfo()
 * @method string telegramPaymentChargeId()
 * @method string providerPaymentChargeId()
 */
class SuccessfulPayment extends BaseModel {}
