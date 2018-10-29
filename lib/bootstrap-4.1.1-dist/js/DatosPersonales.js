        var cont=0;
        var cont2=0;
        $(document).ready(function(){
            $('#btn_add_titulo').click(function(){
                agregarTitulo();
            });
            $('#btn_del_titulo').click(function(){
                eliminarTitulo();
            });
            $('#btn_add_cargo').click(function(){
                agregarCargo();
            });
            $('#btn_del_cargo').click(function(){
                eliminarCargo();
            });
        });
        function agregarTitulo(){
            cont++;
            var fila= '<tr id="fila'+cont+'"><td><input type="text" class="form-control" id="Titulos" placeholder="Ingresar titulo" name="Titulos[]">\n\
    </td><td><input type="text" class="form-control" id="Otorga" placeholder="Entidad que lo otorga" name="Otorga[]"></td></tr>';
            $('#tablaTitulos').append(fila);
        }
        function eliminarTitulo(){
            $('#fila'+cont).remove();
            cont--;
        }
        function agregarCargo(){
            cont2++;
            var filacar= '<tr id="filacar'+cont2+'"><td><select class="form-control" id="CargoDocente"><option>Profesor Titular</option><option>Profesor Asociado</option>\n\
                <option>Profesor Adjunto</option><option>Asistente de Docencia</option><option>Ayudante de Docencia</option></select>\n\
    </td><td><select class="form-control" id="Dedicacion"><option>Simple</option><option>Parcial</option><option>Completa</option>\n\
            </select></td><td><select class="form-control" id="Departamento"><option>Cs. Naturales y Exactas</option><option>Cs. Sociales</option>\n\
            </select></td></tr>';
            $('#tablaCargos').append(filacar);
        }
        function eliminarCargo(){
            $('#filacar'+cont2).remove();
            cont2--;
        }
        