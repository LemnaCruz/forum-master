<?php

namespace App\Application\QuestionManagement;

use App\Domain\QuestionManagement\Question\QuestionId;

    /**
    * DeleteQuestionCommand
    *
    * @package App\Application\QuestionManagement
    *
    * @OA\Schema(
    *     description="DeleteQuestionCommand",
    *     title="DeleteQuestionCommand"
    * )
    */

class DeleteQuestionCommand
{
    /**
    * @var QuestionId
    */
    private QuestionId $questionId;


    public function __construct(QuestionId $questionId)
    {
        $this->questionId = $questionId;

    }

    /** questionId
     *
     * @return QuestionId
     */
    public function questionId(): QuestionId
    {
        return $this->questionId;
    }
}
