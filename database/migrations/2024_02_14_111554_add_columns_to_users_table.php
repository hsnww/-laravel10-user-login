<?php

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
        Schema::table('users', function (Blueprint $table) {
            // تحديد الحقل الذي تريد إضافة الحقول الجديدة بعده
            // في هذا المثال، سنفترض أن 'remember_token' هو آخر حقل قبل 'created_at' و 'updated_at'
            $lastFieldBeforeTimestamps = 'remember_token';

            $table->string('image')->nullable()->after($lastFieldBeforeTimestamps);
            $table->text('about')->nullable()->after('image');
            $table->string('company')->nullable()->after('about');
            $table->string('job')->nullable()->after('company');
            $table->string('country')->nullable()->after('job');
            $table->string('address')->nullable()->after('country');
            $table->string('phone')->nullable()->after('address');
            $table->string('twitter')->nullable()->after('phone');
            $table->string('facebook')->nullable()->after('twitter');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('linkedin')->nullable()->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
