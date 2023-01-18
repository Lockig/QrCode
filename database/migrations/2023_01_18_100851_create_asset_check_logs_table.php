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
        Schema::create('asset_check_logs', function (Blueprint $table) {
            $table->id();
            $table->string('asset_id');
            $table->foreign('asset_id')->references('id')->on('assets');
            $table->date('checked_date');
            $table->string('qr_code');
            $table->string('asset_changed');
            $table->string('checked_photos');
            $table->softDeletes();
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
        Schema::dropIfExists('asset_check_logs');
    }
};
