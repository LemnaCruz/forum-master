<?php

namespace spec\App\Application\AnswerManagement;

use App\Application\AnswerManagement\GiveAnswerCommand;
use App\Application\Command;
use App\Domain\UserManagement\User;
use PhpSpec\ObjectBehavior;

class GiveAnswerCommandSpec extends ObjectBehavior
{
    /**
     * @var
     */
    private $body;

    function let(User $user)
    {
        $this->body = "Hi!";

        $this->beConstructedWith($user, $this->body);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GiveAnswerCommand::class);
    }

    function its_a_command()
    {
        $this->shouldBeAnInstanceOf(Command::class);
    }

    function it_has_a_body()
    {
        $this->body()->shouldBe($this->body);
    }

    function it_has_a_user(User $user)
    {
        $this->owner()->shouldBe($user);
    }

}
