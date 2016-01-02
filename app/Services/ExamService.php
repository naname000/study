<?php

namespace App\Services;
use App\Repositories\ExamInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory as ValidateFactory;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 19:24
 */
class ExamService implements ExamServiceInterface
{

    /**
     * @var array Examにアクセスする際の検証ルール
     */
    protected $rules = ['slug' => 'required|max: 255'];

    /**
     * @var ExamInterface
     */
    protected $examInterface;

    /**
     * @var ValidateFactory;
     */
    protected $validateFactory;

    public function __construct(ExamInterface $examInterface, ValidateFactory $validateFactory)
    {
        $this->examInterface = $examInterface;
        $this->validateFactory = $validateFactory;
    }

    public function getExamBySlug(Request $request)
    {
        $validator = $this->validateFactory->make(
            [
                'slug' => $request->route('slug'),
            ],
            $this->rules
        );
        if($validator->fails()) {
            return null;
        }
        $ret = $this->examInterface->getExamBySlug($request->route('slug'));
        return $ret;
    }
}