@extends('painel/store/layouts/main')
@section("content")
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Categorias <small>Tabela de categorias</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <a href="{{url('admin/loja/categorias/adicionar')}}" class="btn btn-primary ">Novo</a>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Abaixo está a tabela de categorias da sua loja virtual
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Slug</th>
                          <th>Total de produtos</th>
                          
                          <th>Ações</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                      @foreach ($categories as $key) 

            
                        <tr>
                          <td id="id">{{$key['name']}}</td>
                          <td>{{$key['slug']}}</td>
                          
                          <td>{{$key['count']}}</td>
                          <td><a href='{{url("admin/loja/categorias/")}}/{{$key['id']}}/excluir'><button class="btn-xs btn-primary" id="order-detail"><i class="fa fa-eye"></i>Vizualizar</button></a>
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
