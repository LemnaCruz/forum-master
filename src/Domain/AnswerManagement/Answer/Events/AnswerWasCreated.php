<?php

namespace App\Domain\AnswerManagement\Answer\Events;

use App\Domain\AnswerManagement\Answer;
use App\Domain\AnswerManagement\Answer\AnswerId;
use App\Domain\QuestionManagement\Question;
use App\Domain\UserManagement\User;
use App\Domain\UserManagement\User\UserId;
use \Slick\Event\Domain\AbstractEvent;
use Slick\Event\Event;

/**
 * @property  appliedOn
 */
class AnswerWasCreated extends AbstractEvent implements Event
{
    private Answer\AnswerId $answerId;
    private UserId $owner;
    private  string  $body;
    private \DateTimeImmutable $appliedOn;

    /**
     * Create a AnswerWasCreated.
     * 
     * @param Answer $answer
     */
    public function __construct(Answer $answer)
    {
        parent::__construct();
        $this->answerId = $answer->answerId();
        $this->owner = $answer->owner()->userId();
        $this->body = $answer->body();
        $this->appliedOn = new \DateTimeImmutable();
    }

    /**
     * answerId
     *
     * return AnswerId
     */
    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    /**
     * owner
     *
     * @return User
     */
    public function owner()
    {
        return $this->owner;
    }

    /**
     * body
     *
     * @return string
     */
    public function body()
    {
        return $this->body;
    }

    public function appliedOn(): \DateTimeImmutable
    {
        return $this->appliedOn;
    }
}
