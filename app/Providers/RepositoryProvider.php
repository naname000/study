<?php
/**
 * Created by IntelliJ IDEA.
 * User: naname
 * Date: 2016/01/02
 * Time: 14:39
 */

namespace App\Providers;

use App\Repositories\ExamInterface;
use App\Repositories\ExamRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ExamInterface::class, ExamRepository::class);
    }
}