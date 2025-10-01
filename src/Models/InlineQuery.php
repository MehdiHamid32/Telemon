<?php

namespace Telemon\Models;

use Telemon\Models\Message\Location;
use Telemon\Models\Message\User;

/**
 * @method string id()
 * @method User from()
 * @method string query()
 * @method string offset()
 * @method string chatType()
 * @method Location location()
 */
class InlineQuery extends BaseModel {}