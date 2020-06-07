<div class="panel-body">
                <h1 class="font-bold">
                <span class="number">2</span>
                </h1>
                <div class="arreglo-x">
                <h3 class="text-color">Requerimientos planta y producción</h3>
                <p>Selección de la variedad teniendo en cuenta su época de desarrollo y estimación de producción (t/ha)</p>
                </div>
                <br>
                <div class="col-lg-12">
                <div class="col-lg-6">
                <div class="form-group col-lg-12">
                <label for="variedad_semilla" class="control-label">Variedad de semilla *</label>
                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-pagelines"></i>
                </span>
 

                <select name="variedad_semilla"  id="variedad_semilla" class="form-control error" aria-required="true" aria-invalid="true" aria-describedby="variedad-error">
                <option value="0">seleccione tipo de semilla</option>                                                                                                
                <option value="1-Tipo1">SEMILLA TIPO 1</option>
                <option value="2-Tipo2">SEMILLA TIPO 2</option>
                </select>
                </div>
                </div>
                <div class="form-group col-lg-12">
                <label for="prod_esperada" class="control-label">Producción esperada (t/ha) *</label>
                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-truck"></i>
                </span>
                <input type="text" id="prod_esperada"  placeholder="(t/ha)" name="prod_esperada" autocomplete="off" class="form-control">
                </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group col-lg-12">
                <label for="siembra" class="control-label">Fecha de siembra *</label>
                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
                </span>
                <input type="date" id="fecha_i"  placeholder="siembra" name="fecha_i" autocomplete="off" class="form-control">
                </div>
                <p class="text-muted">Indique o estime el día de siembra</p>
                </div>
                <div class="form-group col-lg-12">
                <label for="germinacion" class="control-label">Fecha de germinación *</label>
                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
                </span>
                <input type="date" id="fecha_f"  placeholder="germinacion" name="fecha_f" autocomplete="off" class="form-control">
                </div>
                <p class="text-muted">Indique o estime el día de germinación del cultivo</p>
                </div>
                </div>
                </div>
                </div>
