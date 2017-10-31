@extends('painel/store/layouts/main')
@section("content")
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Aicionar novo produto</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="container">
                <div class="x_panel">
                  
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Geral</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Inventário</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Entrega</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Produtos Relacionados</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">Atributos</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Variaçoes</a>
                        </li>

                        <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Imagens</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="x_content">
                    <br />
                    <form id="demo-form2" novalidate class="form-horizontal form-label-left" method="post" action="{{url('admin/loja/produtos/adicionar')}}">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de produto</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="selectpicker" data-live-search="true" name='product-type' multiple>
                             
                              <option value="simple" data-tokens="simples">Produto simples</option>
                                 <option value="variable" data-tokens="variavel">Produto variavel</option>
                              
                             
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name='nome' class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descricao curta<span class="required">*</span>
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name='desc' required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Descricao<span class="required">*</span>
                        </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="content" id="editor" class="form-group">Descriçao do produto</textarea>
                          </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Categoria</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="selectpicker" data-live-search="true" name='category' multiple>
                              @foreach($categories as $cat)
                              <option value="{{$cat['id']}}" data-tokens="{{$cat['slug']}}">{{$cat['name']}}</option>
                              
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Categoria Mãe</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="selectpicker" data-live-search="true" name="category-parent">
                              @foreach($categories as $cat)
                              <option value="{{$cat['id']}}" data-tokens="{{$cat['slug']}}">{{$cat['name']}}</option>
                              
                              @endforeach
                          </select>
                        </div>
                      </div>
                

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Preço<span class="required">*</span>
                        </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="regular-price" name="regular-price" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Preço promocional<span class="required">*</span>
                        </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="sale-price" name="sale-price" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>

                
                     
                      <div class="ln_solid"></div>
                      

                  </div>
                  <!-- TAB2-->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                         <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ref">REF <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="ref" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty-stock">Quantidade em estoque <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name" required="required" name="qty-stock" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status do estoque</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" name='stock-status' class="form-control" required>
                            <option value=true>Em estoque</option>
                            <option value=false>Fora estoque</option>
                          </select>
                        </div>
                      </div>
                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Permitir encomenda?<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" name="allow_order">
                            <option value="no">Não permitir</option>
                            <option value="notify">Permitir mas informar ao cliente</option>
                            <option value="yes">Permitir</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      
                        </div>
                  </div>

                        </div>



                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">


                          <!-- ENTREGA-->
                          <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Peso <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="weight" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dimensões (cm) <span class="required">*</span>
                        </label>
                      
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="comprimento" name="length" class="form-control" type="text">
                  </div>
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="largura" name='widht' class="form-control" type="text">
                  </div>
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="altura" name="heigth" class="form-control" type="text">
                  </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Classe de Entrega</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" name="class-shipping" required>
                            <option value="press">Nenhuma classe de entrega</option>
                          </select>
                        </div>
                      </div>
                

                      <div class="ln_solid"></div>
                  
                        </div>
                  </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Aumente as vendas<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Venda cruzada<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
              
                         
                        </div>
                      </div>
                        </div>
                  </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                          <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nome<span class="required">*</span>
                        </label>
                      
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="ex: Tamanho" name='product-attr' class="form-control" type="text">
                  </div>
                   <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Valores<span class="required">*</span>
                        </label>
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="P,M,G" name='attr-value' class="form-control" type="text">

                  </div>
                  <i class="glyphicon glyphicon-question-sign"></i>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <center><button class="btn btn-primary">Adicionar</button></center>
                         
                        </div>
                      </div>
                        </div>
                  </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                          <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />

                    
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Valores Padrao</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" name='stock-status' class="form-control" required>
                            <option value=true>Sem valor padrao</option>
                            <option value=false>Variação X</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">#003</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select id="variation-select" name='stock-status' class="form-control" required>
                            <option value=0>Selecione</option>
                            <option value=1>Tamanho X</option>
                            <option value=2>Tamanho Y</option>
                            <option value=3>Tamanho Z</option>
                            
                          </select>
                          <hr>
                          <div id="demo" class="collapse">

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="variation-price">Preço<span class="required">*</span>
                        </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="variation-price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Preço promocional<span class="required">*</span>
                        </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="variation-sale-price" name="sale-price" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                      </div>
                                 </div>

                            </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <center><button class="btn btn-primary">Adicionar</button></center>
                         
                        </div>
                      </div>
                        </div>
                  </div>
                        </div>
                          <!--TAB  6 IMAGENS-->
                        <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                          <div class="x_content">
                          <div class="form-horizontal form-label-left">
                    <br />
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nome<span class="required">*</span>
                        </label>
                      
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="ex: Tamanho" class="form-control" type="text">
                  </div>
                   <label class="control-label col-md-1 col-sm-1 col-xs-12" for="last-name">Valores<span class="required">*</span>
                        </label>
                          <div class="col-sm-2 col-sm-2 col-xs-2 form-group">
                    <input placeholder="P,M,G" class="form-control" type="text">

                  </div>
                  <i class="glyphicon glyphicon-question-sign"></i>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <center><button class="btn btn-primary">Adicionar</button></center>
                         
                        </div>
                      </div>
                      <button type="submit" id="button">Salvar</button>
                    </form>
                        </div>
                  </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>


              
              <div class="clearfix"></div>

              
              
              <div class="clearfix"></div>


              

              

            <div class="clearfix"></div>

            

            
            

            

          



            


            



          
          


            
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /page content -->


@endsection
