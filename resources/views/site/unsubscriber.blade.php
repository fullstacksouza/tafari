{{Form::open(['url'=>'unsubscriber'])}}
{{Form::label('email','Seu Email')}}
{{Form::text('email',null,['placeholder'=>'Seu Email'])}}
{{Form::submit('Cancelar Inscrição')}}
{{Form::close()}}

@if(Session::has('msg'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Erro</strong> {!!Session::get('msg')!!}
        </div>
    @endif