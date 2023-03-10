<?php

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\TipoExamen;
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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->date('fregistro');
            $table->foreignIdFor(Paciente::class)->constrained();
            $table->foreignIdFor(TipoExamen::class)->constrained();
            $table->foreignId('medico_id')->constrained('users');
            $table->string('estado')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
};
