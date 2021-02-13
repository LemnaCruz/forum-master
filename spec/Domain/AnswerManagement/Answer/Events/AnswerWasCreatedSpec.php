<?php

namespace spec\App\Domain\AnswerManagement\Answer\Events;

use App\Domain\AnswerManagement\Answer;
use App\Domain\AnswerManagement\Answer\Events\AnswerWasCreated;
use App\Domain\QuestionManagement\Question;
use App\Domain\UserManagement\User;
use DateTimeImmutable;
use PhpSpec\ObjectBehavior;
use Slick\Event\Domain\AbstractEvent;
use Slick\Event\Event;

class AnswerWasCreatedSpec extends ObjectBehavior
{
    private $body;
    private $answerId;
    private $userId;


    function let(Answer $answer, User  $user)
    {
        $this->answerId = new Answer\AnswerId();
        $this->userId = new User\UserId();
        $this->body = "New Answer";

        $user->userId()->willReturn($this->userId);
        $answer->answerId()->willReturn($this->answerId);
        $answer->owner()->willReturn($user);
        $answer->body()->willReturn($this->body);

        $this->beConstructedWith($answer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerWasCreated::class);
    }

    function its_an_event()
    {
        $this->shouldBeAnInstanceOf(Event::class);
        $this->shouldHaveType(AbstractEvent::class);
        $this->occurredOn()->shouldBeAnInstanceOf(DateTimeImmutable::class);
    }

    function it_has_a_answer_id()
    {
        $this->answerId()->shouldBe($this->answerId);
    }

    function it_has_a_owner_id()
    {
        $this->owner()->shouldBe($this->userId);
    }

    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }
}
