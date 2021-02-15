<?php


namespace Salebot\Models;



class ButtonModel
{


    /**
     * Тип кнопки
     * reply, inline
     * @var string|null
     */
    private $type;

    /**
     * Текст кнопки
     * @var string|null
     */
    private $text;

    /**
     * Номер линии
     * @var string|int|null
     */
    private $line;

    /**
     * Позиция кнопки в линии
     * @var string|int|null
     */
    private $index_in_line;

    /**
     * Cсылка, по которой будет переход при нажатии на кнопку
     * (В телеграмме работает только для кнопок в тексте);
     * @var string|null
     */
    private $url;

    /**
     * Цвет кнопки;
     * @var string|null
     */
    private $color;

    /**
     * заполните это свойство значением 1,
     * и клавиатура не удалится после отправки сообщения (это свойство относится только к кнопкам reply
     * @var int|null
     */
    private $one_time;


    /**
     * @return string|null
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return int|string|null
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param int|string $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return int|string|null
     */
    public function getIndexInLine()
    {
        return $this->index_in_line;
    }

    /**
     * @param int|string $index_line
     */
    public function setIndexInLine($index_in_line)
    {
        $this->index_in_line = $index_in_line;
    }

    /**
     * @return string|null
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return int|null
     */
    public function getOneTime(): int
    {
        return $this->one_time;
    }

    /**
     * @param int $one_time
     */
    public function setOneTime(int $one_time)
    {
        $this->one_time = $one_time;
    }


    /**
     * @return array
     */
    public function toArray(){
        $result = [];

        if(!empty($this->getUrl())) { $result['url'] = $this->getUrl(); }
        if(!empty($this->getColor())) { $result['color'] = $this->getColor(); }
        if(!empty($this->getLine())) { $result['line'] = $this->getLine(); }
        if(!empty($this->getIndexInLine())) { $result['index_in_line'] = $this->getIndexInLine(); }
        if(!empty($this->getText())) { $result['text'] = $this->getText(); }
        if(!empty($this->getType())) { $result['type'] = $this->getType(); }
        if(!empty($this->getOneTime())) { $result['one_time'] = $this->getOneTime(); }

        return $result;
    }

}