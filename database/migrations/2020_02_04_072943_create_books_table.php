<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('author_name');
            $table->unsignedBigInteger('book_number')->nullable();
            $table->string('student_name');
            $table->string('student_id');
            $table->date('issued_date');
            $table->date('return_date');
            $table->unsignedBigInteger('fines_amount');
            $table->string('status_borrowed');
            $table->unsignedBigInteger('pay_amount');
            $table->unsignedBigInteger('paid_value');
            $table->unsignedBigInteger('change_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        
    }
}
