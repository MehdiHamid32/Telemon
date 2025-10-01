<?php

namespace Telemon\Models;

/**
 * Telegram Chat object
 *
 * @method int id()
 * @method string type()
 * @method string title()
 * @method string username()
 * @method string firstName()
 * @method string lastName()
 * @method string photo()
 * @method string bio()
 * @method string description()
 * @method string inviteLink()
 * @method int pinnedMessage()
 * @method int permissions()
 * @method int slowModeDelay()
 * @method int messageAutoDeleteTime()
 * @method bool hasProtectedContent()
 * @method bool stickerSetName()
 * @method bool canSetStickerSet()
 */
class Chat extends BaseModel {}