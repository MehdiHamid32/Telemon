<?php

namespace Telemon\Models;

use Telemon\Models\Message\User;

/**
 * @method string id()
 * @method User from()
 * @method Message message()
 * @method string query()
 * @method string inlineMessageId()
 * @method string chatInstance()
 * @method string data()
 * @method string gameShortName()
 */
class CallbackQuery extends BaseModel {}