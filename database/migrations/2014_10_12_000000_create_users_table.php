<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->nullable();
            $table->string('email', 100)->unique();
            $table->string('phone', 15)->nullable();
            $table->string('gender', 20)->nullable();
            $table->enum('role', ['Admin', 'Cliente', 'Veterinaria', 'Medico'])->default('Cliente');
            $table->boolean('status')->default(1);
            $table->string('password', 100);
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
