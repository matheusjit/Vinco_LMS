<?php

declare(strict_types=1);

use App\Models\Chapter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Chapter::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('short_content');
            $table->enum('content_type', ['text', 'video']);
            $table->text('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
