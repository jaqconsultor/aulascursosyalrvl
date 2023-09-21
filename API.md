
## Reglas y Nomativas para la API


# Leer Registros

     public function index()
      {
 
         $registros = DB::table($this->tabla)->get();
 
         return response()->json([
             'status' => true,
             'registros' => $registros,
             'mensaje' => "Registro Guardado Satisfactoriamente",
             'codigo' => 200
         ]);

      }
 
# Crear Registros

      public function store(Request $request)
      {
         $registros = DB::table($this->tabla)->updateOrInsert(
            [ 'numhistoria'  => $request->numhistoria ,'codeantecedente'  => $request->codeantecedente ,'detalles'  => $request->detalles ,'descripcion'  => $request->descripcion ,'tipo'  => $request->tipo ,'tipo2'  => $request->tipo2  ] 
         );
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
 
     }


# Mostrar un Registro  
      public function show($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }

# Leer un Registro para Editar

      public function edit($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }
  
# Actulizar un Registro

      public function update(Request $request, $id)
      {
         $registros = DB::table($this->tabla)->where('id', $id)->update(
            [ 'numhistoria'  => $request->numhistoria ,'codeantecedente'  => $request->codeantecedente ,'detalles'  => $request->detalles ,'descripcion'  => $request->descripcion ,'tipo'  => $request->tipo ,'tipo2'  => $request->tipo2  ] 
        );
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }

# Borrar un Registro

      public function destroy($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->delete();
         return response()->json([
            'status' => true,
            'registros' => $registros,
            'mensaje' => "Registro Guardado Satisfactoriamente",
            'codigo' => 200
        ]);
      }


