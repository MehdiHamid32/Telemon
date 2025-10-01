<?php

namespace Telemon\Models\Message;

use Telemon\Models\BaseModel;

/**
 * @method string id()
 * @method string question()
 * @method array options()
 * @method bool isClosed()
 * @method bool isAnonymous()
 * @method string type()
 * @method bool allowsMultipleAnswers()
 */
class Poll extends BaseModel {}
