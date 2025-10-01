<?php

namespace Telemon\Responses;

use Telemon\Models\BaseModel;
use Telemon\Models\Message;

/**
 * @method bool ok()
 * @method Message result()
 * @method int errorCode()
 * @method string description()
 */
class ResponseMessage extends BaseModel {}