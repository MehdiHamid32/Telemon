<?php

namespace Telemon\Models;

use Telemon\Models\Message\Animation;
use Telemon\Models\Message\Audio;
use Telemon\Models\Message\CaptionEntities;
use Telemon\Models\Message\Chat;
use Telemon\Models\Message\Contact;
use Telemon\Models\Message\Dice;
use Telemon\Models\Message\DirectMessagesTopic;
use Telemon\Models\Message\Document;
use Telemon\Models\Message\Entity;
use Telemon\Models\Message\ForumTopicClosed;
use Telemon\Models\Message\ForumTopicCreated;
use Telemon\Models\Message\ForumTopicEdited;
use Telemon\Models\Message\Game;
use Telemon\Models\Message\GeneralForumTopicHidden;
use Telemon\Models\Message\GeneralForumTopicUnhidden;
use Telemon\Models\Message\InlineKeyboardMarkup;
use Telemon\Models\Message\Invoice;
use Telemon\Models\Message\LinkPreviewOptions;
use Telemon\Models\Message\Location;
use Telemon\Models\Message\PassportData;
use Telemon\Models\Message\PhotoSize;
use Telemon\Models\Message\Poll;
use Telemon\Models\Message\ProximityAlertTriggered;
use Telemon\Models\Message\Sticker;
use Telemon\Models\Message\Story;
use Telemon\Models\Message\SuccessfulPayment;
use Telemon\Models\Message\SuggestedPostInfo;
use Telemon\Models\Message\TextQuote;
use Telemon\Models\Message\User;
use Telemon\Models\Message\Venue;
use Telemon\Models\Message\Video;
use Telemon\Models\Message\VideoChatEnded;
use Telemon\Models\Message\VideoChatParticipantsInvited;
use Telemon\Models\Message\VideoChatScheduled;
use Telemon\Models\Message\VideoChatStarted;
use Telemon\Models\Message\VideoNote;
use Telemon\Models\Message\Voice;
use Telemon\Models\Message\WebAppData;

/**
 * Telegram Message object
 *
 * @method int messageId()
 * @method int messageThreadId()
 * @method DirectMessagesTopic directMessagesTopic()
 * @method User from()
 * @method Chat senderChat()
 * @method int senderBoostCount()
 * @method User senderBusinessBot()
 * @method int date()
 * @method string businessConnectionId()
 * @method Chat chat()
 * @method User forwardFrom()
 * @method Chat forwardFromChat()
 * @method int forwardFromMessageId()
 * @method string forwardSignature()
 * @method string forwardSenderName()
 * @method int forwardDate()
 * @method bool isTopicMessage()
 * @method bool isAutomaticForward()
 * @method Message replyToMessage()
 * @method TextQuote quote()
 * @method Story replyToStory()
 * @method int replyToChecklistTaskId()
 * @method User viaBot()
 * @method int editDate()
 * @method bool hasProtectedContent()
 * @method bool isFromOffline()
 * @method bool isPaidPost()
 * @method string mediaGroupId()
 * @method string authorSignature()
 * @method int paidStarCount()
 * @method string text()
 * @method Entity[] entities()
 * @method LinkPreviewOptions linkPreviewOptions()
 * @method SuggestedPostInfo suggestedPostInfo()
 * @method string effectId()
 * @method Animation animation()
 * @method Audio audio()
 * @method Document document()
 * @method PhotoSize[] photo()
 * @method Sticker[] sticker()
 * @method Video video()
 * @method VideoNote videoNote()
 * @method Voice voice()
 * @method string caption()
 * @method CaptionEntities[] captionEntities()
 * @method Contact contact()
 * @method Dice dice()
 * @method Game game()
 * @method Poll poll()
 * @method Venue venue()
 * @method Location location()
 * @method User[] newChatMembers()
 * @method User leftChatMember()
 * @method string newChatTitle()
 * @method array newChatPhoto()
 * @method bool deleteChatPhoto()
 * @method bool groupChatCreated()
 * @method bool supergroupChatCreated()
 * @method bool channelChatCreated()
 * @method Message messageAutoDeleteTimerChanged()
 * @method int migrateToChatId()
 * @method int migrateFromChatId()
 * @method Message pinnedMessage()
 * @method Invoice invoice()
 * @method SuccessfulPayment successfulPayment()
 * @method string connectedWebsite()
 * @method PassportData passportData()
 * @method ProximityAlertTriggered proximityAlertTriggered()
 * @method ForumTopicCreated forumTopicCreated()
 * @method ForumTopicClosed forumTopicClosed()
 * @method ForumTopicEdited forumTopicEdited()
 * @method GeneralForumTopicHidden generalForumTopicHidden()
 * @method GeneralForumTopicUnhidden generalForumTopicUnhidden()
 * @method VideoChatScheduled videoChatScheduled()
 * @method VideoChatStarted videoChatStarted()
 * @method VideoChatEnded videoChatEnded()
 * @method VideoChatParticipantsInvited videoChatParticipantsInvited()
 * @method WebAppData webAppData()
 * @method InlineKeyboardMarkup replyMarkup()
 */
class Message extends BaseModel {}