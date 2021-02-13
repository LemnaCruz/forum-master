<?php

namespace spec\App\Domain\AnswerManagement\Answer\Events;

use App\Domain\AnswerManagement\Answer\AnswerId;
use App\Domain\AnswerManagement\Answer\Events\AnswerWasEdited;
use PhpSpec\ObjectBehavior;
use Slick\Event\Domain\AbstractEvent;
use Slick\Event\Event;

class AnswerWasEditedSpec extends ObjectBehavior
{
    private AnswerId $answerId;
    private string $body;

    function let()
    {
        $this->answerId = new AnswerId();
        $this->body = "new Answer";
        $this->beConstructedWith(
            $this->answerId,
            $this->body
        );
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerWasEdited::class);
    }

    function its_an_event()
    {
        $this->shouldBeAnInstanceOf(Event::class);
        $this->shouldHaveType(AbstractEvent::class);
        $this->occurredOn()->shouldBeAnInstanceOf(\DateTimeImmutable::class);
    }

    /**
     *
     */
    function it_has_a_answerId()
    {
        $this->answerId()->shouldBe($this->answerId);
    }

    /**
     *
     */
    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }
}
