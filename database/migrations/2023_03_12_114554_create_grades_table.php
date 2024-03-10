<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->float('weighing_factor');
            $table->decimal('lowest_passing_grade')->default(5.5)->comment( 'Lowest grade to pass so average calculations can be applied');
            $table->decimal('best_grade')->nullable();
            $table->timestamps();

            $table->foreignId('course_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
