@extends('painel/layouts/main')
@section("content")
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Produtos <small>Tabela de produtos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <a href="{{url('admin/loja/produtos/adicionar')}}" class="btn btn-primary ">Novo</a>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Abaixo está a tabela de produtos da sua loja virtual
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Nome</th>
                          <th>Sku</th>
                          <th>Preço</th>
                          <th>Ações</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                      @foreach ($products as $key) 

						
                        <tr>
                          <td id="id">{{$key['id']}}</td>
                          <td>{{$key['name']}}</td>
                          <td>{{$key['sku']}}</td>
                          <td>R$  {{$key['price']}}</td>
                          <td><a href='{{url("admin/loja/pedidos/")}}/{{$key['id']}}/detalhes'><button class="btn-xs btn-primary" id="order-detail"><i class="fa fa-eye"></i>Vizualizar</button></a>
                          <button class="btn-xs btn-warning"><i class="fa fa-edit"></i>Editar</button> <button class="btn-xs btn-danger"><i class="fa fa-trash"></i>Excluir</button></td>
                         
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

 			</div>
          </div>
        </div>
        <!-- /page content -->

@endsection
