<?php

namespace StudyD3;

/**
 * Created by PhpStorm.
 * User: yousan
 * Date: 1/3/16
 * Time: 7:17 PM
 */
class Exam
{
    public $id;
    public $title;
    public $slug;
    /** @var  Question[] */
    public $questions;

    /**
     * Exam constructor.
     * @param Question[] $questions
     * @param $id
     * @param $title
     * @param $slug
     */
    public function __construct($id, $title, $slug, array $questions)
    {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->questions = $questions;
    }


}