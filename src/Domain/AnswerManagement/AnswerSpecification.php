<?php


namespace App\Domain\AnswerManagement;

/**
 * AnswerSpecification
 *
 * @package App\Domain\AnswerManagement
 */

interface AnswerSpecification
{
    /**
     * Returns TRUE whenever the given question is satisfied by this specification
     *
     * @param Answer $answer
     * @return bool
     */
    public function isSatisfiedBy(Answer $answer): bool;
}