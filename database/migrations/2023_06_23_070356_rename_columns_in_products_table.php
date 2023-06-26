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
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('`new`', '`invertor`');
            $table->renameColumn('`hit`', '`wifi`');
            $table->renameColumn('`recommend`', '`silent`');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('`invertor', 'new`');
            $table->renameColumn('`wifi', 'hit`');
            $table->renameColumn('`silent', 'recommend`');
        });
    }
};
