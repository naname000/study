<?php
use App\Repositories\ExamInterface;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 18:24
 */
class ExamRepositoryTest extends TestCase
{

    // テストに使われるデータベースクエリをトランザクションで括ってデータベースを汚さないTrait
    use DatabaseTransactions;

    /**
     * @var ExamInterface
     */
    protected $repository;

    public function setUp()
    {
        parent::setUp();
        $this->repository = $this->app->make(ExamInterface::class);
    }

    public function testGetExamBySlug()
    {
        $exam = factory(\App\Exam::class)->create();
        $result = $this->repository->getExamBySlug($exam->slug);
        $this->assertEquals($exam->slug, $result->slug);
    }

    public function testExceptionGetExamBySlug()
    {
        try {
            $this->repository->getExamBySlug('non-exist-slug');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return;
        }
        $this->fail('Exception not occurred.');
    }
}