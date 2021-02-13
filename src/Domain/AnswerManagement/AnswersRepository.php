<?php


namespace App\Domain\AnswerManagement;


use App\Domain\AnswerManagement\Answer\AnswerId;
use App\Domain\Exception\EntityNotFound;

interface AnswersRepository
{

    /**
     * @param Answer $answer
     * @return Answer
     */
    public function add(Answer $answer): Answer;

    /**
     * Retrieves the question stored with provided identifier
     *
     * @param AnswerId $answerId
     * @return Answer
     * @throws EntityNotFound when no answer is found for provided identifier
     */
    public function whitId(AnswerId $answerId): Answer;

    /**
     * Updates changes on provided answer
     *
     * @param Answer $answer
     * @return Answer
     */
    public function update(Answer $answer): Answer;

    /**
     * Remove provided answer from repository
     *
     * @param Answer $answer
     */
    public function remove(Answer $answer): void;

    /**
     * @param Answer $answer
     * @return Answer
     */
    public function given(Answer $answer): Answer;

}