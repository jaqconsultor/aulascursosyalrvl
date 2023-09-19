<?php

use Illuminate\Support\Facades\Route;


// Esta es la ruta principal del Sistema
Route::get('/', function () {
    return redirect('home');
});

// Estas Son las Rutas de las Actualizaciones
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buscarmedicos', [App\Http\Controllers\ComponentesController::class, 'buscarmedicos'])->name('buscarmedicos');
Route::get('/verpacientes', [App\Http\Controllers\ComponentesController::class, 'verpacientes'])->name('verpacientes');
Route::get('/vercarusel', [App\Http\Controllers\ComponentesController::class, 'vercarusel'])->name('vercarusel');


// Setear el Idioma del Lenguaje
Route::get('/set_language/{lang}', [App\Http\Controllers\ComponentesController::class, 'set_language'])->name('set_language');

// Funciones del Sistema
Route::prefix('/funciones')->group(function () {
    Route::get('/verrerporte', [App\Http\Controllers\ComponentesController::class, 'verreporte'])->name('verreporte');
    Route::get('/verrerporte1', [App\Http\Controllers\ComponentesController::class, 'verreporte1'])->name('verreporte1');
    Route::get('/subirarchivo', [App\Http\Controllers\ComponentesController::class, 'subirarchivo'])->name('subirarchivo');
    Route::get('/verscroll', [App\Http\Controllers\ComponentesController::class, 'verscroll'])->name('verscroll');

    // Prueba de Envio de Correo
    Route::get('/pruebaEmail', [App\Http\Controllers\PruebaEmail::class, 'enviarEmailPdf'])->name('pruebaEmail');
});

// Funciones para Migrar
Route::prefix('/migrar')->group(function () {

    // Poner y quitar campos en produccion
    Route::get('/up', [App\Http\Controllers\SysMigracionController::class, 'up']);
    Route::get('/down', [App\Http\Controllers\SysMigracionController::class, 'down']);

});

// Funciones para Corregir Data
Route::prefix('data')->group(function () {
    Route::get('/corregirdata', [App\Http\Controllers\SysMigracionController::class, 'corregirdata']);

    // Llenar las tablas con los datos Iniciales y Vaciar las tablas
    Route::get('/updata', [App\Http\Controllers\SysMigracionController::class, 'updata']);
    Route::get('/downdata', [App\Http\Controllers\SysMigracionController::class, 'downdata']);
});

// Tablas Generales
Route::prefix('tablas')->group(function () {
    Route::get('/verlistpacientes', [App\Http\Controllers\TablasController::class, 'verlistpacientes']);
    Route::get('/verformulario', [App\Http\Controllers\FormularioController::class, 'verformulario']);
});

// manejo de los Usuarios
Route::prefix('usuarios')->group(function () {
    Route::get('/asignarroles', [App\Http\Controllers\UsuariosController::class, 'asignarroles']);
    Route::get('/verlistroles', [App\Http\Controllers\tablas\RolesController::class, 'index']);
    Route::get('/verlistusuarios', [App\Http\Controllers\UsuariosController::class, 'verlistusuarios']);
});


Route::prefix('tablas')->group(function () {

    // Crud de Roles
    Route::resource('roles', App\Http\Controllers\tablas\RolesController::class);
 
    // Crud de las Demas Tablas
    Route::resource('antece_paciente', App\Http\Controllers\tablas\Antece_pacienteController::class);
    Route::resource('antecedentes', App\Http\Controllers\tablas\AntecedentesController::class);
    Route::resource('bancos', App\Http\Controllers\tablas\BancosController::class);
    Route::resource('baremo_quiru', App\Http\Controllers\tablas\Baremo_quiruController::class);
    Route::resource('clinicas', App\Http\Controllers\tablas\ClinicasController::class);
    Route::resource('cola', App\Http\Controllers\tablas\ColaController::class);
    Route::resource('cola_dia_no_labor', App\Http\Controllers\tablas\Cola_dia_no_laborController::class);
    Route::resource('constancia_obs', App\Http\Controllers\tablas\Constancia_obsController::class);
    Route::resource('consultas', App\Http\Controllers\tablas\ConsultasController::class);
    Route::resource('consultas_n', App\Http\Controllers\tablas\Consultas_nController::class);
    Route::resource('consultorios', App\Http\Controllers\tablas\ConsultoriosController::class);
    Route::resource('cuentas_x_pagar', App\Http\Controllers\tablas\Cuentas_x_pagarController::class);
    Route::resource('cuentas_x_pagar_mov', App\Http\Controllers\tablas\Cuentas_x_pagar_movController::class);
    Route::resource('dd_arterial_mi', App\Http\Controllers\tablas\Dd_arterial_miController::class);
    Route::resource('department', App\Http\Controllers\tablas\DepartmentController::class);
    Route::resource('detalles_factura_cliente', App\Http\Controllers\tablas\Detalles_factura_clienteController::class);
    Route::resource('detalles_factura_cliente_copy', App\Http\Controllers\tablas\Detalles_factura_cliente_copyController::class);
    Route::resource('detalles_presupuesto_plantilla', App\Http\Controllers\tablas\Detalles_presupuesto_plantillaController::class);
    Route::resource('diagnostico_paciente', App\Http\Controllers\tablas\Diagnostico_pacienteController::class);
    Route::resource('diagnosticos', App\Http\Controllers\tablas\DiagnosticosController::class);
    Route::resource('dias_semana', App\Http\Controllers\tablas\Dias_semanaController::class);
    Route::resource('dieta_paciente', App\Http\Controllers\tablas\Dieta_pacienteController::class);
    Route::resource('doctores', App\Http\Controllers\tablas\DoctoresController::class);
    Route::resource('eco_doppler', App\Http\Controllers\tablas\Eco_dopplerController::class);
    Route::resource('eco_obstetrico', App\Http\Controllers\tablas\Eco_obstetricoController::class);
    Route::resource('eco_obstetrico_tercer', App\Http\Controllers\tablas\Eco_obstetrico_tercerController::class);
    Route::resource('eco_obstetrico_tercer_2', App\Http\Controllers\tablas\Eco_obstetrico_tercer_2Controller::class);
    Route::resource('eco_obstetrico_tercer_2_o', App\Http\Controllers\tablas\Eco_obstetrico_tercer_2_oController::class);
    Route::resource('eco_obstetrico_tercer_o', App\Http\Controllers\tablas\Eco_obstetrico_tercer_oController::class);
    Route::resource('eco_pelvico', App\Http\Controllers\tablas\Eco_pelvicoController::class);
    Route::resource('eco_pelvico_c', App\Http\Controllers\tablas\Eco_pelvico_cController::class);
    Route::resource('ecocadiograma_fetal', App\Http\Controllers\tablas\Ecocadiograma_fetalController::class);
    Route::resource('emision_pagos', App\Http\Controllers\tablas\Emision_pagosController::class);
    Route::resource('emision_pagos_detalle', App\Http\Controllers\tablas\Emision_pagos_detalleController::class);
    Route::resource('employee', App\Http\Controllers\tablas\EmployeeController::class);
    Route::resource('especial', App\Http\Controllers\tablas\EspecialController::class);
    Route::resource('evolucion', App\Http\Controllers\tablas\EvolucionController::class);
    Route::resource('evolucion_2', App\Http\Controllers\tablas\Evolucion_2Controller::class);
    Route::resource('evolucion_c', App\Http\Controllers\tablas\Evolucion_cController::class);
    Route::resource('evolucion_copy', App\Http\Controllers\tablas\Evolucion_copyController::class);
    Route::resource('evolucion_copy2w', App\Http\Controllers\tablas\Evolucion_copy2wController::class);
    Route::resource('evolucion_platas', App\Http\Controllers\tablas\Evolucion_platasController::class);
    Route::resource('examen_fisico', App\Http\Controllers\tablas\Examen_fisicoController::class);
    Route::resource('examen_fisico_nuevo', App\Http\Controllers\tablas\Examen_fisico_nuevoController::class);
    Route::resource('examen_fisico_nuevo_copy', App\Http\Controllers\tablas\Examen_fisico_nuevo_copyController::class);
    Route::resource('examen_obs', App\Http\Controllers\tablas\Examen_obsController::class);
    Route::resource('examen_paciente', App\Http\Controllers\tablas\Examen_pacienteController::class);
    Route::resource('examen_pareja', App\Http\Controllers\tablas\Examen_parejaController::class);
    Route::resource('examenes', App\Http\Controllers\tablas\ExamenesController::class);
    Route::resource('factura_cliente', App\Http\Controllers\tablas\Factura_clienteController::class);
    Route::resource('facturas_compras', App\Http\Controllers\tablas\Facturas_comprasController::class);
    Route::resource('facturas_compras_detalle', App\Http\Controllers\tablas\Facturas_compras_detalleController::class);
    Route::resource('fechas_libres', App\Http\Controllers\tablas\Fechas_libresController::class);
    Route::resource('formato_print', App\Http\Controllers\tablas\Formato_printController::class);
    Route::resource('his_con_pre_factura', App\Http\Controllers\tablas\His_con_pre_facturaController::class);
    Route::resource('hospitalizacion', App\Http\Controllers\tablas\HospitalizacionController::class);
    Route::resource('imagen_consulta', App\Http\Controllers\tablas\Imagen_consultaController::class);
    Route::resource('imagen_pacientes', App\Http\Controllers\tablas\Imagen_pacientesController::class);
    Route::resource('imagen_pacientes_2', App\Http\Controllers\tablas\Imagen_pacientes_2Controller::class);
    Route::resource('imagenes', App\Http\Controllers\tablas\ImagenesController::class);
    Route::resource('informe', App\Http\Controllers\tablas\InformeController::class);
    Route::resource('intenven_servi', App\Http\Controllers\tablas\Intenven_serviController::class);
    Route::resource('interven_consulta', App\Http\Controllers\tablas\Interven_consultaController::class);
    Route::resource('listado', App\Http\Controllers\tablas\ListadoController::class);
    Route::resource('motivo_cita', App\Http\Controllers\tablas\Motivo_citaController::class);
    Route::resource('motivo_consulta_paciente', App\Http\Controllers\tablas\Motivo_consulta_pacienteController::class);
    Route::resource('motivo_factura', App\Http\Controllers\tablas\Motivo_facturaController::class);
    Route::resource('motivo_factura_prov', App\Http\Controllers\tablas\Motivo_factura_provController::class);
    Route::resource('motivos_consulta', App\Http\Controllers\tablas\Motivos_consultaController::class);
    Route::resource('operadores', App\Http\Controllers\tablas\OperadoresController::class);
    Route::resource('paciente_no_regi', App\Http\Controllers\tablas\Paciente_no_regiController::class);
    Route::resource('pacientes', App\Http\Controllers\tablas\PacientesController::class);
    Route::resource('pago_quiru', App\Http\Controllers\tablas\Pago_quiruController::class);
    Route::resource('pbcatcol', App\Http\Controllers\tablas\PbcatcolController::class);
    Route::resource('pbcatedt', App\Http\Controllers\tablas\PbcatedtController::class);
    Route::resource('pbcatfmt', App\Http\Controllers\tablas\PbcatfmtController::class);
    Route::resource('pbcattbl', App\Http\Controllers\tablas\PbcattblController::class);
    Route::resource('pbcatvld', App\Http\Controllers\tablas\PbcatvldController::class);
    Route::resource('pre_natal_desarrollo_fino', App\Http\Controllers\tablas\Pre_natal_desarrollo_finoController::class);
    Route::resource('pre_natal_observaciones', App\Http\Controllers\tablas\Pre_natal_observacionesController::class);
    Route::resource('prena_exames_b', App\Http\Controllers\tablas\Prena_exames_bController::class);
    Route::resource('presupuesto_operatorio', App\Http\Controllers\tablas\Presupuesto_operatorioController::class);
    Route::resource('presupuesto_operatorio_copy', App\Http\Controllers\tablas\Presupuesto_operatorio_copyController::class);
    Route::resource('presupuesto_planti', App\Http\Controllers\tablas\Presupuesto_plantiController::class);
    Route::resource('proveedor', App\Http\Controllers\tablas\ProveedorController::class);
    Route::resource('radiologia_obs', App\Http\Controllers\tablas\Radiologia_obsController::class);
    Route::resource('radiologia_paciente', App\Http\Controllers\tablas\Radiologia_pacienteController::class);
    Route::resource('radiologias', App\Http\Controllers\tablas\RadiologiasController::class);
    Route::resource('recipe_detalle', App\Http\Controllers\tablas\Recipe_detalleController::class);
    Route::resource('recipe_grupo', App\Http\Controllers\tablas\Recipe_grupoController::class);
    Route::resource('recipe_grupo_detalle', App\Http\Controllers\tablas\Recipe_grupo_detalleController::class);
    Route::resource('recipe2', App\Http\Controllers\tablas\Recipe2Controller::class);
    Route::resource('recipes', App\Http\Controllers\tablas\RecipesController::class);
    Route::resource('recipes_pareja', App\Http\Controllers\tablas\Recipes_parejaController::class);
    Route::resource('referencia', App\Http\Controllers\tablas\ReferenciaController::class);
    Route::resource('reg_empl_frec_nomina', App\Http\Controllers\tablas\Reg_empl_frec_nominaController::class);
    Route::resource('reg_empl_tipo_nomina', App\Http\Controllers\tablas\Reg_empl_tipo_nominaController::class);
    Route::resource('registro_empleados', App\Http\Controllers\tablas\Registro_empleadosController::class);
    Route::resource('registro_empleados_eje', App\Http\Controllers\tablas\Registro_empleados_ejeController::class);
    Route::resource('registro_empleados_eje_detalle', App\Http\Controllers\tablas\Registro_empleados_eje_detalleController::class);
    Route::resource('registro_operaciones', App\Http\Controllers\tablas\Registro_operacionesController::class);
    Route::resource('reposo_paciente', App\Http\Controllers\tablas\Reposo_pacienteController::class);
    Route::resource('representante', App\Http\Controllers\tablas\RepresentanteController::class);
    Route::resource('seg_emp', App\Http\Controllers\tablas\Seg_empController::class);
    Route::resource('sms_compra', App\Http\Controllers\tablas\Sms_compraController::class);
    Route::resource('sms_enviados', App\Http\Controllers\tablas\Sms_enviadosController::class);
    Route::resource('sms_envio_pac', App\Http\Controllers\tablas\Sms_envio_pacController::class);
    Route::resource('texto_doppler', App\Http\Controllers\tablas\Texto_dopplerController::class);
    Route::resource('tipo_antecedente', App\Http\Controllers\tablas\Tipo_antecedenteController::class);
    Route::resource('tipos_conceptos', App\Http\Controllers\tablas\Tipos_conceptosController::class);
    Route::resource('tipos_documentos', App\Http\Controllers\tablas\Tipos_documentosController::class);
    Route::resource('tipos_examenes', App\Http\Controllers\tablas\Tipos_examenesController::class);
    Route::resource('tipos_recipe', App\Http\Controllers\tablas\Tipos_recipeController::class);
    Route::resource('ultra_abdominal', App\Http\Controllers\tablas\Ultra_abdominalController::class);
    Route::resource('ultra_mama', App\Http\Controllers\tablas\Ultra_mamaController::class);
    Route::resource('ultra_prostatico', App\Http\Controllers\tablas\Ultra_prostaticoController::class);
    Route::resource('ultra_testiculos', App\Http\Controllers\tablas\Ultra_testiculosController::class);
    Route::resource('ultra_tiroides_musculo', App\Http\Controllers\tablas\Ultra_tiroides_musculoController::class);
    Route::resource('vacunas_movimiento', App\Http\Controllers\tablas\Vacunas_movimientoController::class);
    Route::resource('vademecum', App\Http\Controllers\tablas\VademecumController::class);
    Route::resource('vademecum_m', App\Http\Controllers\tablas\Vademecum_mController::class);
    


});

Route::prefix('reportes')->group(function () {
    Route::get('/verreporte1', [App\Http\Controllers\ReportesController::class, 'verreporte1']);
});

Route::prefix('consultas')->group(function () {
    Route::get('/verconsulta', [App\Http\Controllers\ConsultaController::class, 'verconsulta']);
});

Route::prefix('citas')->group(function () {
    Route::get('/vercitas', [App\Http\Controllers\CitasController::class, 'vercitas']);

});

Route::prefix('administracion')->group(function () {
    Route::get('/veradministracion1', [App\Http\Controllers\AdministracionController::class, 'veradministracion1']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/verdashboard1', [App\Http\Controllers\DashboardController::class, 'verdashboard1']);
});

Route::prefix('graficos')->group(function () {
    Route::get('/vergrafico1', [App\Http\Controllers\GraficosController::class, 'vergrafico1']);

});

Route::prefix('orthoreport')->group(function () {
    Route::get('/opciones', [App\Http\Controllers\OrthoreportController::class, 'opciones']);
});

Route::prefix('pacientes')->group(function () {
    Route::get('/pacientes', [App\Http\Controllers\PacientesController::class, 'pacientes']);
});

Route::prefix('desistema')->group(function () {
    Route::get('/opciones', [App\Http\Controllers\OpcionesController::class, 'opciones']);
});

Route::prefix('medico')->group(function () {
});

Route::prefix('recipes')->group(function () {
    Route::get('/opciones', [App\Http\Controllers\RecipesController::class, 'opciones']);
});
