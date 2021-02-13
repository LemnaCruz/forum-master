<?php

namespace App\Domain\AnswerManagement\Answer\Events;

use App\Domain\AnswerManagement\Answer\AnswerId;
use Slick\Event\Domain\AbstractEvent;
use Slick\Event\Event;

class AnswerWasEdited extends AbstractEvent implements Event
{
    /**
     * @var AnswerId
     */
    private AnswerId $answerId;
    private string $body;

    /**
     * AnswerWasEdited constructor.
     * @param AnswerId $answerId
     * @param string $body
     */
    public function __construct(AnswerId $answerId, string $body)
    {
        parent::__construct();
        $this->answerId = $answerId;
        $this->body = $body;
    }

    /**
     * @return AnswerId
     */
    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    /**
     * @return string
     */
    public function body(): string
    {
        return $this->body;
    }
}
