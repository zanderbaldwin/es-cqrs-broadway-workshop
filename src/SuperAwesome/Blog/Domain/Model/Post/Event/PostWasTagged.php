<?php

namespace SuperAwesome\Blog\Domain\Model\Post\Event;

class PostWasTagged
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $tag;

    public function __construct($id, $tag)
    {
        $this->id = $id;
        $this->tag = $tag;
    }

    /**
     * @return mixed The object instance
     */
    public static function deserialize(array $data)
    {
        return new static(
            $data['id'],
            $data['tag']
        );
    }

    /**
     * @return array
     */
    public function serialize()
    {
        return [
            'id' => $this->id,
            'tag' => $this->tag,
        ];
    }
}
