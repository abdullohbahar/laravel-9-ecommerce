<?php

use App\Models\User;
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
        Schema::create('personal_datas', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_lengkap');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            // $table->foreignUuid('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(User::class)->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('personal_datas');
    }
};
