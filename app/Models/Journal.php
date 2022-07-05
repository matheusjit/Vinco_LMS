<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Journal.
 *
 * @property int $id
 * @property int $course_id
 * @property int|null $student_id
 * @property int|null $professor_id
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $institution_id
 * @property-read Journal $course
 * @property-read Institution $institution
 * @property-read Student|null $student
 * @property-read Professor|null $teacher
 * @method static Builder|Journal newModelQuery()
 * @method static Builder|Journal newQuery()
 * @method static Builder|Journal query()
 * @method static Builder|Journal whereCourseId($value)
 * @method static Builder|Journal whereCreatedAt($value)
 * @method static Builder|Journal whereDate($value)
 * @method static Builder|Journal whereEndTime($value)
 * @method static Builder|Journal whereId($value)
 * @method static Builder|Journal whereInstitutionId($value)
 * @method static Builder|Journal whereProfessorId($value)
 * @method static Builder|Journal whereStartTime($value)
 * @method static Builder|Journal whereStudentId($value)
 * @method static Builder|Journal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Journal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}