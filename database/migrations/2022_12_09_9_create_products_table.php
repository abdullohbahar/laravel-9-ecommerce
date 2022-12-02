<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Merchant;
use App\Models\ProductPicture;
use App\Models\Review;
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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->text('thumbnail');
            $table->integer('harga');
            $table->integer('diskon');
            $table->integer('terjual');
            $table->integer('stok');
            $table->foreignIdFor(ProductPicture::class)->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Review::class)->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Comment::class)->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Category::class)->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Merchant::class)->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
