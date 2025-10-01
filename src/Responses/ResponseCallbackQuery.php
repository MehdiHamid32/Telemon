<?php

namespace Telemon\Responses;

use Telemon\Models\BaseModel;
use Telemon\Models\CallbackQuery;

/**
 * @method bool ok()
 * @method CallbackQuery result()
 * @method int errorCode()
 * @method string description()
 */
class ResponseCallbackQuery extends BaseModel {}