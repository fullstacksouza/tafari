@extends('painel/store/layouts/main')
@section("content")
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pedidos <small>Tabela de pedidos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Abaixo está a tabela de pedidos da sua loja virtual
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Cliente</th>
                          <th>Data</th>
                          <th>Total</th>
                          <th>Ações</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                      @foreach ($result as $key) 

						
                        <tr>
                          <td id="id">{{$key['id']}}</td>
                          <td>{{$key['billing']['first_name']}} {{$key['billing']['last_name']}}</td>
                          <td class="date">{{
                           \Carbon\Carbon::parse($key['date_created'])->format('d-m-Y H:i')}}</td>
                          <td>R$  {{$key['total']}}</td>
                          <td><a href='{{url("admin/loja/pedidos/")}}/{{$key['id']}}/detalhes'><button class="btn-xs btn-primary" id="order-detail"><i class="fa fa-eye"></i>Vizualizar</button></a>
                          <button class="btn-xs btn-primary"><i class="fa fa-eye"></i>Vizualizar</button></td>
                         
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
@push('scripts')
     <script src="{{asset('painel/vendors/moment/min/moment.min.js')}}"></script>
    <script type="text/javascript">
    	var date2 = moment(document.getElementsByClassName('order-date2').innerHTML).format('LL');
  alert(date2);
    </script>
@endpush

<script type="text/javascript">
	
</script>