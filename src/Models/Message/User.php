<?php

namespace Telemon\Models\Message;

use Telemon\Models\BaseModel;

/**
 * Telegram User object
 *
 * @method int id()
 * @method bool isBot()
 * @method string firstName()
 * @method string lastName()
 * @method string username()
 * @method string languageCode()
 * @method bool isPremium()
 * @method bool addedToAttachmentMenu()
 * @method bool canJoinGroups()
 * @method bool canReadAllGroupMessages()
 * @method bool supportsInlineQueries()
 */
class User extends BaseModel {}
