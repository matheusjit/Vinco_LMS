<?php

declare(strict_types=1);

namespace App\Providers;

use App\Interfaces\AcademicYearRepositoryInterface;
use App\Interfaces\CampusRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ChapterRepositoryInterface;
use App\Interfaces\CourseRepositoryInterface;
use App\Interfaces\DepartmentRepositoryInterface;
use App\Interfaces\LessonRepositoryInterface;
use App\Interfaces\PersonnelRepositoryInterface;
use App\Interfaces\ProfessorRepositoryInterface;
use App\Interfaces\SchedulerRepositoryInterface;
use App\Interfaces\TrashedCampusRepositoryInterface;
use App\Interfaces\TrashedCategoryRepositoryInterface;
use App\Interfaces\TrashedChapterRepositoryInterface;
use App\Interfaces\TrashedCourseRepositoryInterface;
use App\Interfaces\TrashedDepartmentRepositoryInterface;
use App\Interfaces\TrashedLessonRepositoryInterface;
use App\Interfaces\TrashedPersonnelRepositoryInterface;
use App\Interfaces\TrashedProfessorRepositoryInterface;
use App\Interfaces\TrashedUsersRepositoryInterface;
use App\Interfaces\UsersRepositoryInterface;
use App\Repositories\Backend\AcademicYearRepository;
use App\Repositories\Backend\CampusRepository;
use App\Repositories\Backend\CategoryRepository;
use App\Repositories\Backend\ChapterRepository;
use App\Repositories\Backend\CourseRepository;
use App\Repositories\Backend\DepartmentRepository;
use App\Repositories\Backend\LessonRepository;
use App\Repositories\Backend\PersonnelRepository;
use App\Repositories\Backend\ProfessorRepository;
use App\Repositories\Backend\SchedulerRepository;
use App\Repositories\Backend\TrashedCampusRepository;
use App\Repositories\Backend\TrashedCategoryRepository;
use App\Repositories\Backend\TrashedChapterRepository;
use App\Repositories\Backend\TrashedCourseRepository;
use App\Repositories\Backend\TrashedDepartmentRepository;
use App\Repositories\Backend\TrashedLessonRepository;
use App\Repositories\Backend\TrashedPersonnelRepositoryTrashed;
use App\Repositories\Backend\TrashedProfessorRepository;
use App\Repositories\Backend\TrashedUsersRepository;
use App\Repositories\Backend\UsersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array|string[]
     */
    protected array $repositories = [
        PersonnelRepositoryInterface::class => PersonnelRepository::class,
        AcademicYearRepositoryInterface::class => AcademicYearRepository::class,
        ProfessorRepositoryInterface::class => ProfessorRepository::class,
        CampusRepositoryInterface::class => CampusRepository::class,
        DepartmentRepositoryInterface::class => DepartmentRepository::class,
        TrashedPersonnelRepositoryInterface::class => TrashedPersonnelRepositoryTrashed::class,
        TrashedDepartmentRepositoryInterface::class => TrashedDepartmentRepository::class,
        TrashedCampusRepositoryInterface::class => TrashedCampusRepository::class,
        TrashedProfessorRepositoryInterface::class => TrashedProfessorRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        TrashedCategoryRepositoryInterface::class => TrashedCategoryRepository::class,
        UsersRepositoryInterface::class => UsersRepository::class,
        TrashedUsersRepositoryInterface::class => TrashedUsersRepository::class,
        CourseRepositoryInterface::class => CourseRepository::class,
        TrashedCourseRepositoryInterface::class => TrashedCourseRepository::class,
        ChapterRepositoryInterface::class => ChapterRepository::class,
        TrashedChapterRepositoryInterface::class => TrashedChapterRepository::class,
        LessonRepositoryInterface::class => LessonRepository::class,
        TrashedLessonRepositoryInterface::class => TrashedLessonRepository::class,
        SchedulerRepositoryInterface::class => SchedulerRepository::class,
    ];

    /**
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
