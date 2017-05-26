@extends("layouts.blank")

@section('titulo')

  Relatório

@endsection

@push("scrips")

<script src="{{asset ("vendors/iCheck/icheck.min.js")}}"></script>

<script>
  
$(function(){

  $("input").iCheck({
    checkboxClass: 'icheckbox_flat-purple'
  });

});

</script>

@endpush

@push("css")

<link rel="stylesheet" href="{{ asset("vendors/iCheck/skins/flat/purple.css") }}">
 
@endpush

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

  @if(count($errors) > 0)

    <div class="alert alert-roxo alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <strong>Atenção!</strong><br>

      <ul>

        @foreach($errors->all() as $erro)

          <li>{{ $erro }}</li>

        @endforeach

      </ul>

    </div>

  @endif

  <div class="x_title">
    <h2> Relatório</h2>
    <div class="clearfix"></div>
  </div>
  
  <div class="x_panel">
    
    <div class="x_title"> Opções </div>
    
    <div class="x_content">

      <form action="{{ url('/pessoas/imprimerelatorios') }}" method="POST" class="form-horizontal" id="form-cadastro-usuario">

        {{ csrf_field() }}

        {{-- Campo Tipo do relatório--}}

        <div class="form-group">

          <label for="senha" class="col-sm-4 control-label">Ordem do Relatório</label>

          <div class="col-sm-4">

             <select name="ordem_relatorio" class="form-control" id="tipodeususario">
              <option value="">Selecione</option>
              <option value="geral">Geral</option>
              <option value="idade">Por Idade</option>
              <option value="sexo">Por Sexo</option>
              <option value="dependentes">Por Dependentes</option>
              <option value="bairro">Por Bairro</option>
            </select>

          </div>
        </div>

        {{-- Campo Campo do Relatório --}}

        <div class="form-group">

            <label for="camporelatorio" class="col-sm-4 control-label">Campo do Relatório</label>

          <div class="checkbox" style="float: left;">
            <label>

                <input value="Nome" name="cabecalhos[nome]" type="checkbox" checked="checked"> Nome

            </label> <br>

            <label>
            
                <input value="Idade" name="cabecalhos[idade]" type="checkbox"> Idade

            </label> <br>

            <label>
            
                <input value="Sexo" name="cabecalhos[sexo]" type="checkbox"> Sexo

            </label> <br>

            <label>
            
                <input value="Data de Nascimento" name="cabecalhos[nascimento]" type="checkbox"> Data de Nascimento

            </label> <br>

            <label>
            
                <input value="CPF" name="cabecalhos[cpf]" type="checkbox"> CPF

            </label> <br>

            <label>
            
                <input value="CTPS" name="cabecalhos[ctps]" type="checkbox"> CTPS

            </label> <br>

            <label>
            
                <input value="NIS" name="cabecalhos[nis]" type="checkbox"> NIS

            </label> <br>

            <label>
            
                <input value="RG" name="cabecalhos[rg]" type="checkbox"> RG

            </label> <br>

            <label>
            
                <input value="PNE" name="cabecalhos[pne]" type="checkbox"> Necessidades Especiais

            </label> <br>

            <label>
            
                <input value="Coparticipante" name="cabecalhos[coparticipante]" type="checkbox"> Coparticipante

            </label> <br>

            <label>
            
                <input value="Dependentes" name="cabecalhos[dependentes]" type="checkbox"> Dependentes

            </label> <br>

            <label>
            
                <input value="Endereço" name="cabecalhos[endereco]" type="checkbox"> Endereço

            </label> <br>

            <label>
            
                <input value="CEP" name="cabecalhos[cep]" type="checkbox"> CEP

            </label> <br>

            <label>
            
                <input value="Bairro" name="cabecalhos[bairro]" type="checkbox"> Bairro

            </label> <br>

            <label>
            
                <input value="Telefone Fixo" name="cabecalhos[telefone_fixo]" type="checkbox"> Telefone Fixo

            </label> <br>

            <label>
            
                <input value="Telefone Celular" name="cabecalhos[telefone_celular]" type="checkbox"> Telefone Celular

            </label> <br>

            <label>
            
                <input value="Email" name="cabecalhos[email]" type="checkbox"> Email

            </label> <br>

            <label>
            
                <input value="Bolsa Familia" name="cabecalhos[bolsa_familia]" type="checkbox"> Bolsa Familia

            </label> <br>

            <label>
            
                <input value="Renda Familiar" name="cabecalhos[renda_familiar]" type="checkbox"> Renda Familiar

            </label> <br>

            <label>
            
                <input value="Tempo de Residência" name="cabecalhos[tempo_residencia]" type="checkbox"> Tempo de Residência

            </label> <br>

           
          </div>

        </div>

        <div class="form-group" style="text-align: center;">
                    <button type="submit" value="submit" class="btn btn-primary">Imprimir</button>
        </div>

        
      </form>



    </div>
  </div>
</div>


@endsection

