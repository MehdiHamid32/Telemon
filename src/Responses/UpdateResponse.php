<?php

namespace Telemon\Responses;

use Telemon\Models\BaseModel;
use Telemon\Models\CallbackQuery;
use Telemon\Models\InlineQuery;
use Telemon\Models\Message;

/**
 * @method Message message()
 * @method InlineQuery inlineQuery()
 * @method CallbackQuery callbackQuery()
 */
class UpdateResponse extends BaseModel {}