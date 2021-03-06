
<!-- Start: Content -->
  <section id="content">
    <div id="topbar">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="/" target="_blank">Home</a></li>
        <li>Painel</li>
        <li class="active">Editar Conta</li>
      </ol>
    </div>
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
            <?php require("../views/adm/alertbox.view.php"); ?>
            <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i>Editar Sua conta</div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="/adm/funcoes.php?ac=editarconta">
                    <div class="form-group">
                      <label for="inputStandard" class="col-lg-2 control-label">Nome: </label>
                      <div class="col-lg-10">
                        <input type="text" id="inputStandard" name="nome" value="<?php echo $objUsuario->getStrNome(); ?>" class="form-control" placeholder="Digite..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputStandard" class="col-lg-2 control-label">CRECI:  </label>
                      <div class="col-lg-10">
                        <input type="text" id="inputStandard" name="creci" value="<?php echo $objUsuario->getIntCreci(); ?>" class="form-control" placeholder="Digite..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputStandard" class="col-lg-2 control-label">Senha:  </label>
                      <div class="col-lg-10">
                        <input type="password" id="inputStandard" name="senha1" class="form-control" placeholder="Digite...">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputStandard" class="col-lg-2 control-label">Repita a senha: </label>
                      <div class="col-lg-10">
                        <input type="password" id="inputStandard" name="senha2" class="form-control" placeholder="Digite...">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12 text-right enviando">
                        <input class="submit btn btn-blue" type="submit" value="Editar">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 