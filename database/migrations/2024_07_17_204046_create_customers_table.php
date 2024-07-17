<?php

use App\Enums\Customer\CustomerStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('bank_account_number', 16)->nullable();
            $table->enum('status', CustomerStatusEnum::values(), 7);
            $table->boolean('complete_info');
            $table->string('mobile', 12);
            $table->string('name', 100);
            $table->string('password');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
