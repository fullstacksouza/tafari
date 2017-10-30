@extends("painel.store.layouts.main")
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pedido <small>Detalhes do pedido</small></h3>
              </div>

              

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                          <i class="fa fa-globe"></i> Pedido.
                                          <small class="pull-right" >Data: <p id="order-date">{{$order['date_created']}}</p></small>
                                         
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          Cliente
                          <address>
                                          <strong>{{$order['billing']['first_name']}} {{$order['billing']['last_name']}}</strong>
                                          <br>{{$order['billing']['address_1']}}
                                          <br>{{$order['billing']['city']}}, {{$order['billing']['state']}} {{$order['billing']['postcode']}}
                                          <br>Telefone: {{$order['billing']['phone']}}
                                          <br>Email: {{$order['billing']['email']}}
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Endereço de cobrança  
                          <address>
                                          <strong>{{$order['billing']['first_name']}} {{$order['billing']['last_name']}}</strong>
                                          <br>{{$order['billing']['address_1']}}
                                          <br>{{$order['billing']['city']}}, {{$order['billing']['state']}} {{$order['billing']['postcode']}}
                                          
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Pedido #{{$order['number']}}</b>
                          <br>
                          <br>
                          <b>Codigo do pedido:</b> {{$order['id']}}
                          <br>
                          <b>Data do Pagamento:</b>{{$order['date_paid'] or 'Aguardando pagamento'}}
                          <br>
                         
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Quantidade</th>
                                <th>Produto</th>
                                <th>SKU</th>
                                
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                $i= 0;
                                @endphp
                              @foreach($order['line_items'] as $item)
                             
                              <tr>
                                <td>{{$item['quantity']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['sku']}}</td>
                                

                                <td>R${{$item['subtotal']}}</td>
                              </tr>
                              @php
                               $i += $item['subtotal'];
                               @endphp
                              @endforeach
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Pagamento</p>
                         
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Metodo de pagamento:</th>
                                  <td>{{$order['payment_method_title']}}</td>
                                </tr>
                                <tr>

                                  <th style="width:50%">Tipo de pagamento:</th>
                                  <td>{{$order['meta_data']['2']['value'] or ''}}</td>
                                </tr>
                               
                                
                                <tr>
                                  <th>Parcelas</th>
                                  
                                  <td>{{$order['meta_data']['4']['value'] or ' '}}</td>
                                  
                                </tr>
                             
                              </tbody>
                            </table>
                          </div>
                         
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Envio e taxas</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td>R$ {{$i}},00</td>
                                </tr>
                                <tr>
                                  <th style="width:50%">Descontos:</th>
                                  <td>R$ {{$order['discount_total']}}</td>
                                </tr>
                               
                                
                                <tr>
                                  <th>Total:</th>
                                  <td>R$ {{$order['total']}}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>Concluir Pedido</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Gerar PDF</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <script type="text/javascript">
      
          // October 26th 2017, 2:19:52 pm)
        </script>

    
@endsection