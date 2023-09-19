<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTemasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::apiResource('apiantece_paciente', App\Http\Controllers\apis\ApiAntece_pacienteController::class);
Route::apiResource('apiantecedentes', App\Http\Controllers\apis\ApiAntecedentesController::class);
Route::apiResource('apibancos', App\Http\Controllers\apis\ApiBancosController::class);
Route::apiResource('apibaremo_quiru', App\Http\Controllers\apis\ApiBaremo_quiruController::class);
Route::apiResource('apiclinicas', App\Http\Controllers\apis\ApiClinicasController::class);
Route::apiResource('apicola', App\Http\Controllers\apis\ApiColaController::class);
Route::apiResource('apicola_dia_no_labor', App\Http\Controllers\apis\ApiCola_dia_no_laborController::class);
Route::apiResource('apiconstancia_obs', App\Http\Controllers\apis\ApiConstancia_obsController::class);
Route::apiResource('apiconsultas', App\Http\Controllers\apis\ApiConsultasController::class);
Route::apiResource('apiconsultas_n', App\Http\Controllers\apis\ApiConsultas_nController::class);
Route::apiResource('apiconsultorios', App\Http\Controllers\apis\ApiConsultoriosController::class);
Route::apiResource('apicuentas_x_pagar', App\Http\Controllers\apis\ApiCuentas_x_pagarController::class);
Route::apiResource('apicuentas_x_pagar_mov', App\Http\Controllers\apis\ApiCuentas_x_pagar_movController::class);
Route::apiResource('apidd_arterial_mi', App\Http\Controllers\apis\ApiDd_arterial_miController::class);
Route::apiResource('apidepartment', App\Http\Controllers\apis\ApiDepartmentController::class);
Route::apiResource('apidetalles_factura_cliente', App\Http\Controllers\apis\ApiDetalles_factura_clienteController::class);
Route::apiResource('apidetalles_factura_cliente_copy', App\Http\Controllers\apis\ApiDetalles_factura_cliente_copyController::class);
Route::apiResource('apidetalles_presupuesto_plantilla', App\Http\Controllers\apis\ApiDetalles_presupuesto_plantillaController::class);
Route::apiResource('apidiagnostico_paciente', App\Http\Controllers\apis\ApiDiagnostico_pacienteController::class);
Route::apiResource('apidiagnosticos', App\Http\Controllers\apis\ApiDiagnosticosController::class);
Route::apiResource('apidias_semana', App\Http\Controllers\apis\ApiDias_semanaController::class);
Route::apiResource('apidieta_paciente', App\Http\Controllers\apis\ApiDieta_pacienteController::class);
Route::apiResource('apidoctores', App\Http\Controllers\apis\ApiDoctoresController::class);
Route::apiResource('apieco_doppler', App\Http\Controllers\apis\ApiEco_dopplerController::class);
Route::apiResource('apieco_obstetrico', App\Http\Controllers\apis\ApiEco_obstetricoController::class);
Route::apiResource('apieco_obstetrico_tercer', App\Http\Controllers\apis\ApiEco_obstetrico_tercerController::class);
Route::apiResource('apieco_obstetrico_tercer_2', App\Http\Controllers\apis\ApiEco_obstetrico_tercer_2Controller::class);
Route::apiResource('apieco_obstetrico_tercer_2_o', App\Http\Controllers\apis\ApiEco_obstetrico_tercer_2_oController::class);
Route::apiResource('apieco_obstetrico_tercer_o', App\Http\Controllers\apis\ApiEco_obstetrico_tercer_oController::class);
Route::apiResource('apieco_pelvico', App\Http\Controllers\apis\ApiEco_pelvicoController::class);
Route::apiResource('apieco_pelvico_c', App\Http\Controllers\apis\ApiEco_pelvico_cController::class);
Route::apiResource('apiecocadiograma_fetal', App\Http\Controllers\apis\ApiEcocadiograma_fetalController::class);
Route::apiResource('apiemision_pagos', App\Http\Controllers\apis\ApiEmision_pagosController::class);
Route::apiResource('apiemision_pagos_detalle', App\Http\Controllers\apis\ApiEmision_pagos_detalleController::class);
Route::apiResource('apiemployee', App\Http\Controllers\apis\ApiEmployeeController::class);
Route::apiResource('apiespecial', App\Http\Controllers\apis\ApiEspecialController::class);
Route::apiResource('apievolucion', App\Http\Controllers\apis\ApiEvolucionController::class);
Route::apiResource('apievolucion_2', App\Http\Controllers\apis\ApiEvolucion_2Controller::class);
Route::apiResource('apievolucion_c', App\Http\Controllers\apis\ApiEvolucion_cController::class);
Route::apiResource('apievolucion_copy', App\Http\Controllers\apis\ApiEvolucion_copyController::class);
Route::apiResource('apievolucion_copy2w', App\Http\Controllers\apis\ApiEvolucion_copy2wController::class);
Route::apiResource('apievolucion_platas', App\Http\Controllers\apis\ApiEvolucion_platasController::class);
Route::apiResource('apiexamen_fisico', App\Http\Controllers\apis\ApiExamen_fisicoController::class);
Route::apiResource('apiexamen_fisico_nuevo', App\Http\Controllers\apis\ApiExamen_fisico_nuevoController::class);
Route::apiResource('apiexamen_fisico_nuevo_copy', App\Http\Controllers\apis\ApiExamen_fisico_nuevo_copyController::class);
Route::apiResource('apiexamen_obs', App\Http\Controllers\apis\ApiExamen_obsController::class);
Route::apiResource('apiexamen_paciente', App\Http\Controllers\apis\ApiExamen_pacienteController::class);
Route::apiResource('apiexamen_pareja', App\Http\Controllers\apis\ApiExamen_parejaController::class);
Route::apiResource('apiexamenes', App\Http\Controllers\apis\ApiExamenesController::class);
Route::apiResource('apifactura_cliente', App\Http\Controllers\apis\ApiFactura_clienteController::class);
Route::apiResource('apifacturas_compras', App\Http\Controllers\apis\ApiFacturas_comprasController::class);
Route::apiResource('apifacturas_compras_detalle', App\Http\Controllers\apis\ApiFacturas_compras_detalleController::class);
Route::apiResource('apifechas_libres', App\Http\Controllers\apis\ApiFechas_libresController::class);
Route::apiResource('apiformato_print', App\Http\Controllers\apis\ApiFormato_printController::class);
Route::apiResource('apihis_con_pre_factura', App\Http\Controllers\apis\ApiHis_con_pre_facturaController::class);
Route::apiResource('apihospitalizacion', App\Http\Controllers\apis\ApiHospitalizacionController::class);
Route::apiResource('apiimagen_consulta', App\Http\Controllers\apis\ApiImagen_consultaController::class);
Route::apiResource('apiimagen_pacientes', App\Http\Controllers\apis\ApiImagen_pacientesController::class);
Route::apiResource('apiimagen_pacientes_2', App\Http\Controllers\apis\ApiImagen_pacientes_2Controller::class);
Route::apiResource('apiimagenes', App\Http\Controllers\apis\ApiImagenesController::class);
Route::apiResource('apiinforme', App\Http\Controllers\apis\ApiInformeController::class);
Route::apiResource('apiintenven_servi', App\Http\Controllers\apis\ApiIntenven_serviController::class);
Route::apiResource('apiinterven_consulta', App\Http\Controllers\apis\ApiInterven_consultaController::class);
Route::apiResource('apilistado', App\Http\Controllers\apis\ApiListadoController::class);
Route::apiResource('apimotivo_cita', App\Http\Controllers\apis\ApiMotivo_citaController::class);
Route::apiResource('apimotivo_consulta_paciente', App\Http\Controllers\apis\ApiMotivo_consulta_pacienteController::class);
Route::apiResource('apimotivo_factura', App\Http\Controllers\apis\ApiMotivo_facturaController::class);
Route::apiResource('apimotivo_factura_prov', App\Http\Controllers\apis\ApiMotivo_factura_provController::class);
Route::apiResource('apimotivos_consulta', App\Http\Controllers\apis\ApiMotivos_consultaController::class);
Route::apiResource('apioperadores', App\Http\Controllers\apis\ApiOperadoresController::class);
Route::apiResource('apipaciente_no_regi', App\Http\Controllers\apis\ApiPaciente_no_regiController::class);
Route::apiResource('apipacientes', App\Http\Controllers\apis\ApiPacientesController::class);
Route::apiResource('apipago_quiru', App\Http\Controllers\apis\ApiPago_quiruController::class);
Route::apiResource('apipbcatcol', App\Http\Controllers\apis\ApiPbcatcolController::class);
Route::apiResource('apipbcatedt', App\Http\Controllers\apis\ApiPbcatedtController::class);
Route::apiResource('apipbcatfmt', App\Http\Controllers\apis\ApiPbcatfmtController::class);
Route::apiResource('apipbcattbl', App\Http\Controllers\apis\ApiPbcattblController::class);
Route::apiResource('apipbcatvld', App\Http\Controllers\apis\ApiPbcatvldController::class);
Route::apiResource('apipre_natal_desarrollo_fino', App\Http\Controllers\apis\ApiPre_natal_desarrollo_finoController::class);
Route::apiResource('apipre_natal_observaciones', App\Http\Controllers\apis\ApiPre_natal_observacionesController::class);
Route::apiResource('apiprena_exames_b', App\Http\Controllers\apis\ApiPrena_exames_bController::class);
Route::apiResource('apipresupuesto_operatorio', App\Http\Controllers\apis\ApiPresupuesto_operatorioController::class);
Route::apiResource('apipresupuesto_operatorio_copy', App\Http\Controllers\apis\ApiPresupuesto_operatorio_copyController::class);
Route::apiResource('apipresupuesto_planti', App\Http\Controllers\apis\ApiPresupuesto_plantiController::class);
Route::apiResource('apiproveedor', App\Http\Controllers\apis\ApiProveedorController::class);
Route::apiResource('apiradiologia_obs', App\Http\Controllers\apis\ApiRadiologia_obsController::class);
Route::apiResource('apiradiologia_paciente', App\Http\Controllers\apis\ApiRadiologia_pacienteController::class);
Route::apiResource('apiradiologias', App\Http\Controllers\apis\ApiRadiologiasController::class);
Route::apiResource('apirecipe_detalle', App\Http\Controllers\apis\ApiRecipe_detalleController::class);
Route::apiResource('apirecipe_grupo', App\Http\Controllers\apis\ApiRecipe_grupoController::class);
Route::apiResource('apirecipe_grupo_detalle', App\Http\Controllers\apis\ApiRecipe_grupo_detalleController::class);
Route::apiResource('apirecipe2', App\Http\Controllers\apis\ApiRecipe2Controller::class);
Route::apiResource('apirecipes', App\Http\Controllers\apis\ApiRecipesController::class);
Route::apiResource('apirecipes_pareja', App\Http\Controllers\apis\ApiRecipes_parejaController::class);
Route::apiResource('apireferencia', App\Http\Controllers\apis\ApiReferenciaController::class);
Route::apiResource('apireg_empl_frec_nomina', App\Http\Controllers\apis\ApiReg_empl_frec_nominaController::class);
Route::apiResource('apireg_empl_tipo_nomina', App\Http\Controllers\apis\ApiReg_empl_tipo_nominaController::class);
Route::apiResource('apiregistro_empleados', App\Http\Controllers\apis\ApiRegistro_empleadosController::class);
Route::apiResource('apiregistro_empleados_eje', App\Http\Controllers\apis\ApiRegistro_empleados_ejeController::class);
Route::apiResource('apiregistro_empleados_eje_detalle', App\Http\Controllers\apis\ApiRegistro_empleados_eje_detalleController::class);
Route::apiResource('apiregistro_operaciones', App\Http\Controllers\apis\ApiRegistro_operacionesController::class);
Route::apiResource('apireposo_paciente', App\Http\Controllers\apis\ApiReposo_pacienteController::class);
Route::apiResource('apirepresentante', App\Http\Controllers\apis\ApiRepresentanteController::class);
Route::apiResource('apiseg_emp', App\Http\Controllers\apis\ApiSeg_empController::class);
Route::apiResource('apisms_compra', App\Http\Controllers\apis\ApiSms_compraController::class);
Route::apiResource('apisms_enviados', App\Http\Controllers\apis\ApiSms_enviadosController::class);
Route::apiResource('apisms_envio_pac', App\Http\Controllers\apis\ApiSms_envio_pacController::class);
Route::apiResource('apitexto_doppler', App\Http\Controllers\apis\ApiTexto_dopplerController::class);
Route::apiResource('apitipo_antecedente', App\Http\Controllers\apis\ApiTipo_antecedenteController::class);
Route::apiResource('apitipos_conceptos', App\Http\Controllers\apis\ApiTipos_conceptosController::class);
Route::apiResource('apitipos_documentos', App\Http\Controllers\apis\ApiTipos_documentosController::class);
Route::apiResource('apitipos_examenes', App\Http\Controllers\apis\ApiTipos_examenesController::class);
Route::apiResource('apitipos_recipe', App\Http\Controllers\apis\ApiTipos_recipeController::class);
Route::apiResource('apiultra_abdominal', App\Http\Controllers\apis\ApiUltra_abdominalController::class);
Route::apiResource('apiultra_mama', App\Http\Controllers\apis\ApiUltra_mamaController::class);
Route::apiResource('apiultra_prostatico', App\Http\Controllers\apis\ApiUltra_prostaticoController::class);
Route::apiResource('apiultra_testiculos', App\Http\Controllers\apis\ApiUltra_testiculosController::class);
Route::apiResource('apiultra_tiroides_musculo', App\Http\Controllers\apis\ApiUltra_tiroides_musculoController::class);
Route::apiResource('apivacunas_movimiento', App\Http\Controllers\apis\ApiVacunas_movimientoController::class);
Route::apiResource('apivademecum', App\Http\Controllers\apis\ApiVademecumController::class);
Route::apiResource('apivademecum_m', App\Http\Controllers\apis\ApiVademecum_mController::class);
*/

//Route::apiResource('temas', ApiTemasController::class);