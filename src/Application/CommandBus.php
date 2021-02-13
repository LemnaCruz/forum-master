<?php

/**
 * This file is part of forum
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Application;

/**
 * CommandBus
 *
 * @package App\Application
 */
interface CommandBus extends CommandHandler
{

    public function Delete(QuestionManagement\DeleteQuestionCommand $command);
}