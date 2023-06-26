<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('products', function (Blueprint $table) {
      $table->tinyInteger('invertor')->default(0);
      $table->tinyInteger('wifi')->default(0);
      $table->tinyInteger('silent')->default(0);
    });
  }
 
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('products', function (Blueprint $table) {
      $table->dropColumn('invertor');
      $table->dropColumn('wifi');
      $table->dropColumn('silent');
    });
  }
};