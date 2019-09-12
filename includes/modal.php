
<!-- Modal visualizar -->
<div class="modal fade" id="modalvisualizar" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Visualizar </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form method="post" name="formedit" action="controllers/ControllersCadastro.php">
                    <input type="hidden" id="acao"  name="acao" value="editar">
                    <input type="hidden" class="form-control" id="idedit" name="id">
                    <div class="form-group row">
                            <label for="carroedit" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="carroedit"  name="carro" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="modeloedit" class="col-sm-2 col-form-label">Modelo</label>
                            <div class="col-sm-10">
                            <input type="modelo" class="form-control" id="modeloedit" name="modelo"  disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anoedit" class="col-sm-2 col-form-label">Ano</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="anoedit"  name="ano" min="1900" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- fim modal visualizar-->
<!-- Modal editar -->
<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Editar </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <!--<form method="post" name="formedit" action="controllers/ControllersCadastro.php">-->
                    <form method="post" name="formedit" id="formedit">
                    <input type="hidden" id="acao"  name="acao" value="editar">
                    <input type="hidden" class="form-control" id="idedit" name="id">
                    <div class="form-group row">
                            <label for="carroedit" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                            
                            <select class="form-control" id="carroedits"  name="carro">
                                <option value="ACURA">ACURA</option>
                                <option value="AGRALE">AGRALE	</option>
                                <option value="ALFA ROMEO">ALFA ROMEO	</option>
                                <option value="ASIA MOTORS">ASIA MOTORS	</option>
                                <option value="ASTON MARTIN">ASTON MARTIN	</option>
                                <option value="AUDI">AUDI</option>
                                <option value="BMW">BMW</option>
                                <option value="BUGRE">BUGRE</option>
                                <option value="CADILLAC">CADILLAC</option>
                                <option value="CBT JIPE">CBT JIPE</option>
                                <option value="CHANA">CHANA</option>
                                <option value="CHERY">CHERY</option>
                                <option value="CHEVROLET">CHEVROLET	</option>
                                <option value="CHRYSLER">CHRYSLER	</option>
                                <option value="CITROEN">CITROEN	</option>
                                <option value="CROSS LANDER">CROSS LANDER</option>
                                <option value="DAEWOO">DAEWOO</option>
                                <option value="DAIHATSU">DAIHATSU</option>
                                <option value="DODGE">DODGE</option>
                                <option value="EFFA">EFFA</option>
                                <option value="ENGESA">ENGESA</option>
                                <option value="FERRARI">FERRARI</option>
                                <option value="FIAT">FIAT</option>
                                <option value="FIBRAVAN">FIBRAVAN</option>
                                <option value="FORD">FORD</option>
                                <option value="GEELY">GEELY</option>
                                <option value="GURGEL">GURGEL</option>
                                <option value="HONDA">HONDA</option>
                                <option value="HYUNDAI">HYUNDAI</option>
                                <option value="ISUZU">ISUZU</option>
                                <option value="IVECO">IVECO</option>
                                <option value="JAC">JAC</option>
                                <option value="JAGUAR">JAGUAR</option>
                                <option value="JEEP	">JEEP</option>
                                <option value="JINBEI">JINBEI</option>
                                <option value="KIA">KIA</option>
                                <option value="LADA">LADA</option>
                                <option value="LAMBORGHINI">LAMBORGHINI</option>
                                <option value="LAND ROVER">LAND ROVER</option>
                                <option value="LEXUS">LEXUS</option>
                                <option value="LIFAN">LIFAN</option>
                                <option value="LOTUS">LOTUS</option>
                                <option value="MASERATI">MASERATI</option>
                                <option value="MAZDA">MAZDA</option>
                                <option value="MCLAREN">MCLAREN</option>
                                <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                <option value="MG">MG</option>
                                <option value="MINI	">MINI</option>
                                <option value="MITSUBISHI">MITSUBISHI</option>
                                <option value="MIURA">MIURA</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="PEUGEOT">PEUGEOT</option>
                                <option value="PONTIAC">PONTIAC</option>
                                <option value="PORSCHE">PORSCHE</option>
                                <option value="RENAULT">RENAULT</option>
                                <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                <option value="ROVER">ROVER</option>
                                <option value="SEAT">SEAT</option>
                                <option value="SHINERAY">SHINERAY</option>
                                <option value="SMART">SMART</option>
                                <option value="SSANGYONG">SSANGYONG</option>
                                <option value="SUBARU">SUBARU</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="TOYOTA">TOYOTA</option>
                                <option value="TROLLER">TROLLER</option>
                                <option value="VOLKSWAGEN">	VOLKSWAGEN	</option>
                                <option value="VOLVO">VOLVO</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="modeloedit" class="col-sm-2 col-form-label">Modelo</label>
                            <div class="col-sm-10">
                            <input type="modelo" class="form-control" id="modeloedits" name="modelo"  require="require">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anoedit" class="col-sm-2 col-form-label">Ano</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="anoedits"  name="ano" min="1900" require="require">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success" id="edit">Salvar alteração</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- fim modal editar-->

<!-- Modal cadastrar -->

<div class="modal fade" id="modalcad" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Cadastrar </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form method="post" name="formcad" id="insert_car">
                    <input type="hidden" id="acao"  name="acao" value="Cadastrar">
                    
                        <div class="form-group row">
                            <label for="Carro" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                            <select class="form-control" id="nomecarro"  name="carro">
                                <option value="ACURA">ACURA</option>
                                <option value="AGRALE">AGRALE	</option>
                                <option value="ALFA ROMEO">ALFA ROMEO	</option>
                                <option value="ASIA MOTORS">ASIA MOTORS	</option>
                                <option value="ASTON MARTIN">ASTON MARTIN	</option>
                                <option value="AUDI">AUDI</option>
                                <option value="BMW">BMW</option>
                                <option value="BUGRE">BUGRE</option>
                                <option value="CADILLAC">CADILLAC</option>
                                <option value="CBT JIPE">CBT JIPE</option>
                                <option value="CHANA">CHANA</option>
                                <option value="CHERY">CHERY</option>
                                <option value="CHEVROLET">CHEVROLET	</option>
                                <option value="CHRYSLER">CHRYSLER	</option>
                                <option value="CITROEN">CITROEN	</option>
                                <option value="CROSS LANDER">CROSS LANDER</option>
                                <option value="DAEWOO">DAEWOO</option>
                                <option value="DAIHATSU">DAIHATSU</option>
                                <option value="DODGE">DODGE</option>
                                <option value="EFFA">EFFA</option>
                                <option value="ENGESA">ENGESA</option>
                                <option value="FERRARI">FERRARI</option>
                                <option value="FIAT">FIAT</option>
                                <option value="FIBRAVAN">FIBRAVAN</option>
                                <option value="FORD">FORD</option>
                                <option value="GEELY">GEELY</option>
                                <option value="GURGEL">GURGEL</option>
                                <option value="HONDA">HONDA</option>
                                <option value="HYUNDAI">HYUNDAI</option>
                                <option value="ISUZU">ISUZU</option>
                                <option value="IVECO">IVECO</option>
                                <option value="JAC">JAC</option>
                                <option value="JAGUAR">JAGUAR</option>
                                <option value="JEEP	">JEEP</option>
                                <option value="JINBEI">JINBEI</option>
                                <option value="KIA">KIA</option>
                                <option value="LADA">LADA</option>
                                <option value="LAMBORGHINI">LAMBORGHINI</option>
                                <option value="LAND ROVER">LAND ROVER</option>
                                <option value="LEXUS">LEXUS</option>
                                <option value="LIFAN">LIFAN</option>
                                <option value="LOTUS">LOTUS</option>
                                <option value="MASERATI">MASERATI</option>
                                <option value="MAZDA">MAZDA</option>
                                <option value="MCLAREN">MCLAREN</option>
                                <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                <option value="MG">MG</option>
                                <option value="MINI	">MINI</option>
                                <option value="MITSUBISHI">MITSUBISHI</option>
                                <option value="MIURA">MIURA</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="PEUGEOT">PEUGEOT</option>
                                <option value="PONTIAC">PONTIAC</option>
                                <option value="PORSCHE">PORSCHE</option>
                                <option value="RENAULT">RENAULT</option>
                                <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                <option value="ROVER">ROVER</option>
                                <option value="SEAT">SEAT</option>
                                <option value="SHINERAY">SHINERAY</option>
                                <option value="SMART">SMART</option>
                                <option value="SSANGYONG">SSANGYONG</option>
                                <option value="SUBARU">SUBARU</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="TOYOTA">TOYOTA</option>
                                <option value="TROLLER">TROLLER</option>
                                <option value="VOLKSWAGEN">	VOLKSWAGEN	</option>
                                <option value="VOLVO">VOLVO</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                            <div class="col-sm-10">
                            <input type="modelo" class="form-control" id="modelo" name="modelo" placeholder="Modelo" require="require">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ano" class="col-sm-2 col-form-label">Ano</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="ano"  name="ano" min="1900" placeholder="Ano" require="require">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success" id="insert">Cadastrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- fim modal cadastrar-->
<!-- inicio modal delete-->
<div class="modal fade" id="modaldel" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Deletar </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form method="post" name="formdel" id="formdel">
                    <input type="hidden" id="acao"  name="acao" value="deletar">
                    <input type="hidden" class="form-control" id="idedit" name="id">
                    <div class="modal-body">
                    Deseja realmente deletar este registro?
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success" id="edit">Deletar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<!-- fim modal delete-->