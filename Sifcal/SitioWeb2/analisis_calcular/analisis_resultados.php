<div class="panel-body">
                                                                    <h1 class="font-bold">
                                                                        <span class="number">3</span>
                                                                    </h1>
                                                                    <div class="arreglo-x">
                                                                        <h3 class="text-color">Resultados del análisis suelo</h3>
                                                                        <p>Análisis de concentración de nutrientes en el suelo</p>
                                                                        <h5>
                                                                            <i class="fa fa-warning text-warning">&nbsp; </i>
                                                                            <span>AVISO.</span>
                                                                        </h5>
                                                                        <span>No 1. Tenga en cuenta que la CIC (Capacidad de Intercambio Catiónico) es el resultado del método en laboratorio Acetato de Amonio 1N, pH 7. Si no dispone de este valor dejar este espacio en blanco. NO ingrese el valor de la CICE (Capacidad de Intercambio Catiónico Efectiva).</span>
                                                                    </div>
                                                                    <br>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group col-lg-12">
                                                                            <label for="textura_suelo" class="control-label">Textura del suelo *</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-map-pin"></i>
                                                                                </span>
                                                                                <select id="textura_suelo" name="textura_suelo" class="form-control error" aria-required="true" aria-invalid="true" aria-describedby="textura-error">
                                                                                    <option value="0">SELECCIONE TEXTURA DE SUELO</option>
                                                                                    <option value="1-ARENOSO-A">ARENOSO A</option>
                                                                                    <option value="2-ARENOSO-FRANCO-AF">ARENOSO FRANCO AF</option>
                                                                                    <option value="3-FRANCO-ARENOSO-FA">FRANCO ARENOSO FA</option>
                                                                                    <option value="4-FRANCO-F">FRANCO F</option>
                                                                                    <option value="5-FRANCO-LIMOSO-FL">FRANCO LIMOSO FL</option>
                                                                                    <option value="6-LIMOSOL">LIMOSO L</option>
                                                                                    <option value="7-FRANCO-ARCILLO-ARENOSO-FArA">FRANCO ARCILLO ARENOSO FArA</option>
                                                                                    <option value="8-FRANCO-ARCILLO-LIMOSO-FArL">FRANCO ARCILLO LIMOSO FArL</option>
                                                                                    <option value="9-ARCILLO-ARENOSO-ArA">ARCILLO ARENOSO ArA</option>
                                                                                    <option value="10-ARCILLO-LIMOSO-ArL">ARCILLO LIMOSO ArL</option>
                                                                                    <option value="11-ARCILLOSO-Ar">ARCILLOSO Ar</option>
                                                                                    <option value="12-FRANCO-ARCILLOSO-FAr">FRANCO ARCILLOSO FAr</option>
                                                                                </select>
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="densidad_aparente" class="control-label">Densidad aparente *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="densidad_aparente" name="densidad_aparente" autocomplete="off" placeholder="gr/cm3" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="ph" class="control-label">pH *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="ph" name="ph" autocomplete="off" onchange="ifcic(this)" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="cic" class="control-label">CIC</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="cic" name="cic" autocomplete="off" placeholder="cmol-Kg" class="form-control">
                                                                                </div>
                                                                                <input type="hidden" id="cicOriginal" name="cicOriginal" value="null">
                                                                                <p class="text-center text-warning">
                                                                                    <i class="fa fa-warning">&nbsp;</i>
                                                                                    <span>Ver AVISO No 1.</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="materia_organica" class="control-label">Materia orgánica *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="materia_organica" name="materia_organica" autocomplete="off" placeholder="%" onchange="moToNt(this)" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="N" class="control-label">
                                                                                    <span>Nitrógeno (N</span><small>T</small><span>)</span>
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text"  name="N" autocomplete="off" disabled="" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="P" class="control-label">Fosforo (P) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="p" name="p" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="K" class="control-label">Potasio (K) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="k" name="k" autocomplete="off" placeholder="meq/100g" onchange="getCICE(this)" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Ca" class="control-label">Calcio (Ca) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="ca" name="ca" autocomplete="off" placeholder="meq/100g" onchange="getCICE(this)" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Mg" class="control-label">Magnesio (Mg) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="mg" name="mg" autocomplete="off" placeholder="meq/100g" onchange="getCICE(this)" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="S" class="control-label">Azufre (S) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="s" name="s" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Na" class="control-label">Sodio (Na) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="na" name="na" autocomplete="off" placeholder="meq/100g" onchange="getCICE(this)" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Al" class="control-label">Aluminio (Al) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="al" name="al" autocomplete="off" placeholder="meq/100g" onchange="getCICE(this)" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Fe" class="control-label">Hierro (Fe) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="fe" name="fe" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Mn" class="control-label">Manganeso (Mn) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="mn" name="mn" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                        
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Zn" class="control-label">Zinc (Zn) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="zn" name="zn" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="Cu" class="control-label">Cobre (Cu) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="cu" name="cu" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="form-group col-lg-12">
                                                                                <label for="B" class="control-label">Boro (B) *</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="fa fa-tencent-weibo"></i>
                                                                                    </span>
                                                                                    <input type="text" id="b" name="b" autocomplete="off" placeholder="ppm" class="form-control" aria-required="true">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>

                                                                        <div class="panel-footer">
                                                                            
                                                                            <!--
                                                                            <button name="insertar" type="submit" value="calculos" class="btn btn-info1 submitWizard col-lg-12 btn-lg">
                                                                                <i class="fa fa-calculator"></i>
                                                                                &nbsp; Calcular fertilización</button>
-->
<button id="result" type="button" value="calculos" class="btn btn-info1 submitWizard col-lg-12 btn-lg">
                                                                                <i class="fa fa-calculator"></i>
                                                                                &nbsp; Calcular fertilización</button>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                            </div>
                                                                </div>
           