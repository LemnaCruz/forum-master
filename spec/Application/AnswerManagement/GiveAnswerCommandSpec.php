<?php

namespace spec\App\Application\AnswerManagement;

use App\Application\AnswerManagement\GiveAnswerCommand;
use PhpSpec\ObjectBehavior;

class GiveAnswerCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GiveAnswerCommand::class);
    }
}
