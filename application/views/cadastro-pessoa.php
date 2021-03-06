<div class="container-fluid">
    <div class="col-md-12 cabecalho">
         <div class="col-md-7 icon-urca hidden-xs">
                    <div class="col-md-3">
                        <img src="<?php echo base_url('assets/img/brasao_login_left.png'); ?> " class="img-responsive">
                    </div>
                   
                </div>
        <h3>Universidade Regional do Cariri</h3>
    </div>
    <div class="col-md-12 corpo-inicio">
        <div class="col-md-offset-3  col-md-6 cadastro-pessoa">
            <h2>Cadastre-se</h2>
            <div class="row col-md-12">
                <form method="post" id="cadastrar-pessoa" name="cadastrar-pessoa" action="<?php echo base_url('Pessoa/inserirPessoa'); ?>" onsubmit="return false">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dados Pessoais</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Email: *</label><span id="error-email" class="aviso-erro"></span>
                                    <input type="email" required="" class="form-control" id="email" name="email" >
                                </div>


                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Repita Email: *</label><span id="error-email-repete" class="aviso-erro"></span>
                                    <input type="email" required="" class="form-control" id="repete_email" name="repete-email" >
                                </div>

                            </div>

                            <div class="col-md-6 input-cadastro">

                                <div class="form-group">
                                    <label for="titulo" id="titulo-senha">Senha: *</label><span id="error-senha" class="aviso-erro"></span>
                                    <input type="password" required="" value="" class="form-control" id="senha" name="senha" >
                                </div>


                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Repita a Senha: *</label><span id="error-repete-senha" class="aviso-erro"> </span>
                                    <input type="password" required="" class="form-control" id="repete_senha" name="repete_senha" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong><i class="glyphicon glyphicon-info-sign"></i> Atenção! Informe corretamente o seu nome. Uma vez cadastrado não será mais possível altera-lo!</strong>
                                </div>

                            </div>
                            <div class="col-md-6">                                                               
                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Nome Completo: *</label><span id="error-nome" class="aviso-erro"> </span>
                                    <input type="text" required="" class="form-control" id="nome" name="nome" >
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Data de Nascimento: *</label>
                                    <input type="date" required="" class="form-control" id="data-nascimento" name="data-nascimento" >
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Instituição: * 
                            <a href="#" data-toggle="modal" data-target="#nova-instituicao"><i class="glyphicon glyphicon-plus"></i> Não encontrei minha Instituição</a>                        
                        </label><span id="error-instituicao" class="aviso-erro"></span>
                        <input type="text" required="" class="form-control" id="instituicaoMask" name="instituicaoMask" onkeyup="buscar(this.value)">
                        <input type="hidden" required="" class="form-control" id="instituicao" name="instituicao" value="">
                        <div id="resultado"></div>
                    </div>

                    <div class="form-group">
                        <label for="texto">Estado: *</label>
                        <select class="form-control" id="estado" name="estado" required="">                
                            <option>Selecione...</option>        
                            <?php
                            foreach ($estados as $result) {
                                $id_estado = $result->id;
                                $sigla = $result->sigla;
                                echo "<option value='$id_estado'>$result->nome</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Cidade: *</label><span id="error-instituicao" class="aviso-erro"></span>
                        <select class="form-control" id="cidades" name="cidades" required="" disableds>
                            <option>Selecione...</option>
                        </select>                                     

                    </div>

                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Celular: *</label><span id="error-telefone" class="aviso-erro"></span>
                        <input type="text" required="" class="form-control" id="celular" name="celular" >
                    </div>


                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Telefone Fixo:</label><span id="error-telfixo" class="aviso-erro"></span>
                        <input type="text" class="form-control" id="tel_fixo" name="tel_fixo" >
                    </div>
                    
                    <div class="alert alert-danger" id="cpf-invalido">
                        <p><i class="glyphicon glyphicon-exclamation-sign"></i> Ops! O CPF informado é inválido!</p>
                    </div>

                    <div class="form-group">
                        <label for="titulo" id="titulo-t">CPF: *</label><span id="error-cpf" class="aviso-erro"> </span>
                        <input type="text" required="" class="form-control" id="cpf" name="cpf" onblur="validarCPF();" >
                    </div>



                    <div class="form-group">
                        <label for="texto">Sexo: *</label>
                        <select class="form-control" id="sexo" name="sexo" required="">                
                            <option value="1">Masculino</option>     
                            <option value="2">Feminino</option>                             
                        </select>
                    </div>
                    
                                        <div class="form-group">
                                            <label for="texto">Categoria: *</label>
                                            <select class="form-control" id="categoria_pessoa" name="categoria_pessoa" required="">
                    <?php
                    foreach ($categorias as $dados) {
                        $id = $dados->id_categorias_inscricoes;
                        $descricao = $dados->descricao;
                        echo "<option value='$id'>$descricao</option>";
                    }
                    ?>
                                            </select>
                                        </div>
                    <div class="col-md-12 btn-formulario">
                        <input type="submit" class="btn btn-success col-md-12 enviar"  value="Gravar dados" id="enviar-pessoa">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--- MODAL -->


    <div class="modal fade" id="nova-instituicao" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cadastrar Instituição:</h4>
                </div>
                <div class="modal-body">  
                   
                   <!-- <form method="post" name="comprovante" action="<?php echo base_url('admin/Ies/inserirIes') ?>" enctype="multipart/form-data">-->

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Cadastrar Instituição</h3>
                            </div>
                            <div class="panel-body">   
                               
                                <div class="form-group">
                                    <label for="titulo">Nome da Instituição:</label><span id="error-titulo-trabalho" class="aviso-erro"> </span>
                                    <input type="text" required="" class="form-control" id="cad-instituicao" name="cad-instituicao"/>
                                </div> 
                                <button class="btn btn-success col-md-12" id="envia-instituicao">Enviar</button>
                            </div>
                        </div>                       
                   <!-- </form>-->
                </div>                                                                
                <div class="modal-footer">                                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancelar</button>
                </div>
            </div>                                                        
        </div>                                                
    </div>
<!-- Modal - VER MAIS -->

