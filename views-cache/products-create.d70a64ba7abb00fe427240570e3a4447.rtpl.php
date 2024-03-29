<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Produtos
  </h1>
  
  <ol class="breadcrumb">
    
    <li>
      <a href="/admin">
        <i class="fa fa-dashboard"></i> Home
      </a>
    </li>
    
    <li>
      <a href="/admin/produtcs">Produtos</a>
    </li>
    
    <li class="active">
      <a href="/admin/produtcs/create">Cadastrar</a>
    </li>

  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Inclusão de Produto</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/products/create" method="post">
          <div class="box-body">
            
            <div class="form-group">
              <label for="desproduct">Nome do produto</label>
              <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto">
            </div>
            
            <div class="form-group">
              <label for="vlprice">Preço</label>
              <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00">
            </div>
            
            <div class="form-group">
              <label for="vlwidth">Largura</label>
              <input type="number" class="form-control" id="vlwidth" name="vlwidth" step="0.01" placeholder="0.00">
            </div>
            
            <div class="form-group">
              <label for="vlheight">Altura</label>
              <input type="number" class="form-control" id="vlheight" name="vlheight" step="0.01" placeholder="0.00">
            </div>
            
            <div class="form-group">
              <label for="vllength">Comprimento</label>
              <input type="number" class="form-control" id="vllength" name="vllength" step="0.01" placeholder="0.00">
            </div>
            
            <div class="form-group">
              <label for="vlweight">Peso</label>
              <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00">
            </div>

            <div class="form-group">
              <label for="desurl">URL</label>
              <input type="text" class="form-control" id="desurl" name="desurl" placeholder="URL">
            </div>

            <div class="form-group">
              <label for="desdescription">Descrição</label>
              <textarea class="form-control" id="desdescription" name="desdescription" placeholder="Descrição"></textarea>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i> Salvar
            </button>

            <a href="/admin/products" class="btn btn-primary">
              <i class="fa fa-undo"></i> Voltar
            </a>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->