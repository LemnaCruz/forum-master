<?php

namespace spec\App\UserInterface;

use App\UserInterface\CreateAnswerController;
use PhpSpec\ObjectBehavior;

class AnswerManagementSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateAnswerController::class);
    }
}
