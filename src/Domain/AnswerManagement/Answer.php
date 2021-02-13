<?php

namespace App\Domain\AnswerManagement;

use App\Domain\AnswerManagement\Answer\AnswerId;
use App\Domain\AnswerManagement\Answer\Events\AnswerWasCreated;
use App\Domain\AnswerManagement\Answer\Events\AnswerWasEdited;
use App\Domain\UserManagement\User;
use DateTimeImmutable;
use JsonSerializable;
use Slick\Event\Domain\EventGeneratorMethods;
use Slick\Event\EventGenerator;

class Answer implements EventGenerator, JsonSerializable
{
    use EventGeneratorMethods;

    /**
     * @var AnswerId
     */
    private AnswerId $answerId;

    /**
     * @var User
     */
    private User $owner;
    private string $body;
    private DateTimeImmutable $appliedOn;
    /**
     * @var AnswerId
     */
    /**
     * @var
     */
    private $open;
    /**
     * @var
     */
    private $lastEditedOn;


    /**
     * Answer constructor.
     * @param User $owner
     *
     * @param string $body
     */
    public function __construct(User $owner, string $body)
    {
        $this->answerId = new AnswerId();
        $this->owner= $owner;
        $this->body = $body;
        $this->appliedOn = new DateTimeImmutable();
        $this->recordThat(new AnswerWasCreated($this));
    }


    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    public function owner(): User
    {
        return $this->owner;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function appliedOn(): DateTimeImmutable
    {
        return $this->appliedOn;
    }

    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * @param string $body
     * @return $this
     */
    public function change(string $body): Answer
    {
        $this->body = $body;
        $this->recordThat(new AnswerWasEdited(
            $this->answerId,
            $this->body,
        ));
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4
     */
    public function jsonSerialize(): array
    {
        return [
            "questionId" => $this->answerId,
            "body" => $this->body,
            "owner" => $this->owner,
            "open" => $this->open,
            "appliedOn" => $this->appliedOn,
            "lastEditedOn" => $this->lastEditedOn,
        ];
    }
}
