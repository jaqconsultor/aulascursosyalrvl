
## Reglas para crear Tablas y campos


# Usar el Controlador 
- SysMigracionController
- metodo UP()

# Forma de Crear una Tabla
<?php 
        if (!Schema::hasTable('roles')) {
            // Colocar los Campos de la Tabla
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->timestamps();
                $table->integer('usercreated_at')->nullable();   // Usuario quien Creo el Registro
                $table->integer('userupdated_at')->nullable();      // Ultimo Usuario que lo Modifico
                $table->integer('activo')->default(1);
            });
        }


# Forma de Crear un Campo en la BD
<?php 
        if (!Schema::hasColumn('users', 'activo')) {
            Schema::table('users', function (Blueprint $table) {
                // Colocar Columna
                $table->integer('activo')->default(1);
            });
        }
?>

# Ejecutar desde la Consola WEB
http://127.0.0.1:8000/migrar/up

