<?php


namespace Salebot\Collections;


use Salebot\Models\ButtonModel;

/**
 * Class ButtonsCollection
 * @package Salebot
 */
class ButtonsCollection
{

    /**
     * @var array
     */
    private $buttons = [];

    /**
     * @param ButtonModel $value
     * @return $this
     */
    public function add(ButtonModel $value): self
    {
        $this->buttons[] = $value;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        $result = [];
        /** @var ButtonModel $item */
        foreach ($this->buttons as $key => $item) {
            $result[$key] = $item->toArray();
        }

        return $result;
    }


}