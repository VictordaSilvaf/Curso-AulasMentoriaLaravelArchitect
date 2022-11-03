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
        Schema::create('signature_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('signature_id')->constrained();
            $table->timestamp('last_updated_at');
            $table->integer('old_plan_id');
            $table->smallInteger('old_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signature_histories');
    }
};
