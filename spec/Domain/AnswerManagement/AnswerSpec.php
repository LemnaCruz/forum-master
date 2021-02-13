<?php

namespace spec\App\Domain\AnswerManagement;

use App\Domain\AnswerManagement\Answer;
use App\Domain\QuestionManagement\Question;
use App\Domain\QuestionManagement\Question\QuestionId;
use App\Domain\UserManagement\User;
use PhpSpec\ObjectBehavior;

class AnswerSpec extends ObjectBehavior
{

    /**
     * @var
     */
    private $body;

    function let(User $user)
    {
        $user->userId()->willReturn(new User\UserId());
        $this->body = "I can't see...";
        $this->beConstructedWith($user, $this->body);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Answer::class);
    }

    function it_has_a_answer_id()
    {
        $this->answerId()->shouldBeAnInstanceOf(Answer\AnswerId::class);
    }

    function it_has_a_user(User $user)
    {
        $this->owner()->shouldBe($user);
    }

    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }

    function it_has_a_date_when_it_was_applied()
    {
        $this->appliedOn()->shouldBeAnInstanceOf(\DateTimeImmutable::class);
    }

}
