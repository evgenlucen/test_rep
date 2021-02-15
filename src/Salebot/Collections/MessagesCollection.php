<?php


namespace Salebot\Collections;


use Salebot\MessageModel;

class MessagesCollection
{

    private $messages = [];

    public function add(MessageModel $value): self
    {
        $this->messages[] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $result = [];
        /** @var MessageModel $item */
        foreach ($this->messages as $key => $item) {
            $result[$key] = $item->toArray();
        }

        return $result;
    }

}