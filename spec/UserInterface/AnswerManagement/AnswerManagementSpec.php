<?php

namespace spec\App\UserInterface\AnswerManagement;

use App\UserInterface\AnswerManagement\AnswerManagement;
use PhpSpec\ObjectBehavior;

class AnswerManagementSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerManagement::class);
    }
}
