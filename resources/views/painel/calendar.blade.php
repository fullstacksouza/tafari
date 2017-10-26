
@extends('painel.layouts.main')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('painel/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('painel/vendors/bootstrap/dist/css/bootstrap.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section("content")

     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Agenda <small>Clique para editar/adicionar um evento</small></h3>
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
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agenda<small>Eventos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     {!! $calendar->calendar() !!}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script type="text/javascript" src="{{asset("painel/vendors/fullcalendar/dist/lang/pt-br.js")}}"></script>

<script type="text/javascript" src="{{asset("painel/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>
{!! $calendar->script() !!}

<script type="text/javascript" src="{{asset('painel/js/callendar-custom.js')}}">
 
</script>
<script type="text/javascript">

</script>

<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Evento/Compromisso</h4>
        </div>
        <div class="modal-body">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
           <form id="event_add" action="#" method="post">
            {{csrf_field()}}
  <div class="form-group">
    <label for="email">Evento</label>
    <input type="txt" name="title" class="form-control" id="title" required="true">
    <input type="hidden" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="end_date">Hora Inicio</label>
    <input type="txt" class="form-control" id="start_date" required="true">
  </div>
 
  <div class="form-group">
    <label for="end_date">Hora Termino</label>
    <input type="txt" class="form-control" id="end_date" required="true">
  </div>
 
  <button type="button" id='buttonS' class="btn btn-default" >Adicionar evento</button>
  <button type="button" id='button_update' class="btn btn-warning">Atualizar evento</button>
  <button type="button" id='button_remove' class="btn btn-danger">Remover da agenda</button>
</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
@endsection
