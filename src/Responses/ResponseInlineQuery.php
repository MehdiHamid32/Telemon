<?php

namespace Telemon\Responses;

use Telemon\Models\BaseModel;
use Telemon\Models\InlineQuery;

/**
 * @method bool ok()
 * @method InlineQuery result()
 * @method int errorCode()
 * @method string description()
 */
class ResponseInlineQuery extends BaseModel {}