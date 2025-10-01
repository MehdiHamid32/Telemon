<?php

namespace Telemon;

use Exception;
use Telemon\Responses\ResponseError;
use Telemon\Responses\ResponseMessage;

/**
 * Telegram Bot API wrapper
 *
 * @method ResponseMessage sendMessage(array $params)
 * @method ResponseMessage forwardMessage(array $params)
 * @method ResponseMessage copyMessage(array $params)
 * @method ResponseMessage sendPhoto(array $params)
 * @method ResponseMessage sendAudio(array $params)
 * @method ResponseMessage sendDocument(array $params)
 * @method ResponseMessage sendVideo(array $params)
 * @method ResponseMessage sendAnimation(array $params)
 * @method ResponseMessage sendVoice(array $params)
 * @method ResponseMessage sendVideoNote(array $params)
 * @method ResponseMessage sendMediaGroup(array $params)
 * @method ResponseMessage sendLocation(array $params)
 * @method ResponseMessage editMessageText(array $params)
 * @method ResponseMessage editMessageCaption(array $params)
 * @method ResponseMessage editMessageMedia(array $params)
 * @method ResponseMessage editMessageReplyMarkup(array $params)
 * @method ResponseMessage stopPoll(array $params)
 * @method ResponseMessage deleteMessage(array $params)
 * @method ResponseMessage getUserProfilePhotos(array $params)
 * @method ResponseMessage getFile(array $params)
 * @method ResponseMessage kickChatMember(array $params)
 * @method ResponseMessage unbanChatMember(array $params)
 * @method ResponseMessage restrictChatMember(array $params)
 * @method ResponseMessage promoteChatMember(array $params)
 * @method ResponseMessage setChatAdministratorCustomTitle(array $params)
 * @method ResponseMessage setChatPermissions(array $params)
 * @method ResponseMessage exportChatInviteLink(array $params)
 * @method ResponseMessage setChatPhoto(array $params)
 * @method ResponseMessage deleteChatPhoto(array $params)
 * @method ResponseMessage setChatTitle(array $params)
 * @method ResponseMessage setChatDescription(array $params)
 * @method ResponseMessage pinChatMessage(array $params)
 * @method ResponseMessage unpinChatMessage(array $params)
 * @method ResponseMessage leaveChat(array $params)
 * @method ResponseMessage getChat(array $params)
 * @method ResponseMessage getChatAdministrators(array $params)
 * @method ResponseMessage getChatMembersCount(array $params)
 * @method ResponseMessage getChatMember(array $params)
 * @method ResponseMessage setChatStickerSet(array $params)
 * @method ResponseMessage deleteChatStickerSet(array $params)
 * @method ResponseMessage answerCallbackQuery(array $params)
 * @method ResponseMessage setMyCommands(array $params)
 * @method ResponseMessage getMyCommands(array $params)
 * @method ResponseMessage editMessageLiveLocation(array $params)
 * @method ResponseMessage stopMessageLiveLocation(array $params)
 * @method ResponseMessage sendVenue(array $params)
 * @method ResponseMessage sendContact(array $params)
 * @method ResponseMessage sendPoll(array $params)
 * @method ResponseMessage sendDice(array $params)
 * @method ResponseMessage sendChatAction(array $params)
 * @method ResponseMessage getStickerSet(array $params)
 * @method ResponseMessage uploadStickerFile(array $params)
 * @method ResponseMessage createNewStickerSet(array $params)
 * @method ResponseMessage addStickerToSet(array $params)
 * @method ResponseMessage setStickerPositionInSet(array $params)
 * @method ResponseMessage deleteStickerFromSet(array $params)
 * @method ResponseMessage setStickerEmojiList(array $params)
 * @method ResponseMessage setStickerKeywords(array $params)
 * @method ResponseMessage setStickerMaskPosition(array $params)
 * @method ResponseMessage setStickerSetTitle(array $params)
 * @method ResponseMessage setStickerSetThumbnail(array $params)
 * @method ResponseMessage deleteStickerSet(array $params)
 * @method ResponseMessage getForumTopicIconStickers(array $params)
 * @method ResponseMessage createForumTopic(array $params)
 * @method ResponseMessage closeForumTopic(array $params)
 * @method ResponseMessage reopenForumTopic(array $params)
 * @method ResponseMessage deleteForumTopic(array $params)
 * @method ResponseMessage unhideGeneralForumTopic(array $params)
 * @method ResponseMessage hideGeneralForumTopic(array $params)
 * @method ResponseMessage answerWebAppQuery(array $params)
 */

class Telemon
{
    protected string $token;

    protected function __construct(string $token)
    {
        $this->token = $token;
    }

    public static function create(string $token): static
    {
        return new static($token);
    }

    private function getEndpoint(string $methodName): string
    {
        return 'https://api.telegram.org/bot' . $this->token . '/' . $methodName;
    }

    /**
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        $params = $arguments[0] ?? [];

        $response = Request::post($this->getEndpoint($name))
            ->setBody($params)
            ->send();

        $data = json_decode($response, true) ?? [];

        if (isset($data['result']['message'])) {
            return new ResponseMessage($data);
        }

        if (isset($data['result']['is_bot'])) {
            return new \Telemon\Responses\ResponseUser($data);
        }

        if (isset($data['result']['type'])) {
            return new \Telemon\Responses\ResponseChat($data);
        }

        return new ResponseError($data);
    }

}