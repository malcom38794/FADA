        var cont=0;
        $(document).ready(function(){
            $('#btn_add_Actividad').click(function(){
                agregarActividad();
            });
            $('#btn_del_Actividad').click(function(){
                eliminarActividad();
            });
        });
        function agregarActividad(){
            cont++;
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" placeholder="Proyecto/Programa" />\n\
            </td><td><select class="form-control" id="Dedicacion"><option>Responsable</option><option>Integrante</option>\n\
            <option>Colaborador</option><option>Dictante</option></select></td><td><input type="number" class="form-control" placeholder="Cantidad semanal" /> \n\
            </td><td><select class="form-control" id="Dedicacion"><option>Anual</option><option>Cuatrimestral</option></select></td></tr>';
            $('#tablaActividadPADA').append(fila);
        }
        function eliminarActividad(){
            $('#fila'+cont).remove();
            cont--;
        }