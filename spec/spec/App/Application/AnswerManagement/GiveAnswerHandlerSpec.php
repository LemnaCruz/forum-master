<?php

namespace spec\App\Application\AnswerManagement;

use App\Application\CommandHandler;
use App\Application\AnswerManagement\GiveAnswerCommand;
use App\Application\AnswerManagement\GiveAnswerHandler;
use App\Domain\AnswerManagement\Answer;
use App\Domain\AnswerManagement\AnswersRepository;
use App\Domain\UserManagement\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Slick\Event\EventDispatcher;

class GiveAnswerHandlerSpec extends ObjectBehavior
{

}
