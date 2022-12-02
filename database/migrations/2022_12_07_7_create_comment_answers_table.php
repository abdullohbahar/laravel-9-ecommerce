<?php

use App\Models\Comment;
use App\Models\CommentAnswer;
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
        Schema::create('comment_answers', function (Blueprint $table) {
            $table->uuid('id');
            $table->text('comment_answer');
            $table->foreignIdFor(Comment::class)->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('comment_answers');
    }
};
