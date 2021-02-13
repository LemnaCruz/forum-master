<?php

namespace App\Application\AnswerManagement;

use App\Application\Command;
use App\Domain\UserManagement\User;

/**
 * GiveAnswerCommand
 *
 * @package App\Application\CreateAnswerController
 *
 * @OA\Schema(
 *     description="GiveAnswerCommand",
 *     title="GiveAnswerCommand"
 * )
 */
class GiveAnswerCommand implements Command
{
    /**
     * @var User
     */
    private User $owner;

    /**
     * @var string
     *
     * @OA\Property(s
     *     example="What time is it?"
     * )
     */

    /**
     * @var string
     *
     * @OA\Property(
     *     description="Answer body",
     *     example="A longer consideration on how to ask for current time."
     * )
     */
    private string $body;


    /**
     * Creates a GiveAnswerCommand
     *
     * @param User $owner
     * @param string $body
     */
    public function __construct(User $owner, string $body)
    {
        $this->owner = $owner;
        $this->body = $body;
    }

    /**
     * owner
     *
     * @return User
     */
    public function owner(): User
    {
        return $this->owner;
    }


    /**
     * body
     *
     * @return string
     */
    public function body(): string
    {
        return $this->body;
    }
}
