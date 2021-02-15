<?php


namespace Salebot;

use Salebot\Collections\ButtonsCollection;

/**
 * Class MessageModel
 * @package Salebot
 */
class MessageModel
{

    public function toArray(){
        $result = [];

        if(!empty($this->getMessage())) {$result['message'] = $this->getMessage(); }
        if(!empty($this->getName())) {$result['name'] = $this->getName(); }
        if(!empty($this->getPhone())) {$result['phone'] = $this->getPhone(); }
        if(!empty($this->getAttachmentType())) {$result['attachment_type'] = $this->getAttachmentType(); }
        if(!empty($this->getAttachmentUrl())) {$result['attachment_url'] = $this->getAttachmentUrl(); }
        if(!empty($this->getBotId())) {$result['bot_id'] = $this->getBotId(); }
        if(!empty($this->getShift())) {$result['shift'] = $this->getShift(); }
        if(!empty($this->getVkId())) {$result['user_id'] = $this->getVkId(); }
        if(!empty($this->getButtons())) {$result['buttons'] = $this->getButtons(); }
        if(!empty($this->getClients())) {$result['clients'] = $this->getClients(); }
        if(!empty($this->getVkGroupId())) {$result['group_id'] = $this->getVkGroupId(); }
        if(!empty($this->getClientId())) {$result['client_id'] = $this->getClientId(); }

        return $result;
    }

    /**
     * @var string|null
     */
    private $client_id;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $vk_id;

    /**
     * @var string|null
     */
    private $vk_group_id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $bot_id;

    /**
     * @var string|null
     */
    private $attachment_type;

    /**
     * @var string|null
     */
    private $attachment_url;

    /**
     * @var ButtonsCollection|null
     */
    private $buttons;

    /**
     * @var string|null
     */
    private $shift;

    /**
     * @var array|null
     */
    private $clients;

    /**
     * @return string|null
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string|null
     */
    public function getVkId(): string
    {
        return $this->vk_id;
    }

    /**
     * @param string $vk_id
     */
    public function setVkId(string $vk_id)
    {
        $this->vk_id = $vk_id;
    }

    /**
     * @return string|null
     */
    public function getVkGroupId(): string
    {
        return $this->vk_group_id;
    }

    /**
     * @param string $vk_group_id
     */
    public function setVkGroupId(string $vk_group_id)
    {
        $this->vk_group_id = $vk_group_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getBotId(): string
    {
        return $this->bot_id;
    }

    /**
     * @param string $bot_id
     */
    public function setBotId(string $bot_id)
    {
        $this->bot_id = $bot_id;
    }

    /**
     * @return string|null
     */
    public function getAttachmentType(): string
    {
        return $this->attachment_type;
    }

    /**
     * @param string $attachment_type
     */
    public function setAttachmentType(string $attachment_type)
    {
        $this->attachment_type = $attachment_type;
    }

    /**
     * @return string|null
     */
    public function getAttachmentUrl(): string
    {
        return $this->attachment_url;
    }

    /**
     * @param string $attachment_url
     */
    public function setAttachmentUrl(string $attachment_url)
    {
        $this->attachment_url = $attachment_url;
    }

    /**
     * @return ButtonsCollection|null
     */
    public function getButtons(): ButtonsCollection
    {
        return $this->buttons;
    }

    /**
     * @param ButtonsCollection $buttons
     */
    public function setButtons(ButtonsCollection $buttons)
    {
        $this->buttons = $buttons;
    }

    /**
     * @return string|null
     */
    public function getShift(): string
    {
        return $this->shift;
    }

    /**
     * @param string $shift
     */
    public function setShift(string $shift)
    {
        $this->shift = $shift;
    }

    /**
     * @return array|null
     */
    public function getClients(): array
    {
        return $this->clients;
    }

    /**
     * @param array $clients
     */
    public function setClients(array $clients)
    {
        $this->clients = $clients;
    }

    /**
     * @return string|null
     */
    public function getClientId(): string
    {
        return $this->client_id;
    }

    /**
     * @param string $client_id
     */
    public function setClientId(string $client_id)
    {
        $this->client_id = $client_id;
    }


}