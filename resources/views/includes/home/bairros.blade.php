<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320 overflow_hidden modal-content">
        <div class="x_title">
            <h2>Inscrições por Bairros de Mesquita</h2>
            <ul class="nav navbar-right panel_toolbox">
                
                <li>
                    <a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i></a>
                </li>

                <li class="dropdown">
                    {{-- Link para gerar relatórios apenas se for Master --}}

                    @if(Auth::user()->admin == "Master")
                    
                        <a href="#" class="dropdown-toggle relatorio" data-ordem="bairro" role="button" aria-expanded="false" data-toggle="tooltip" title="Relatório por Bairros"><i class="fa fa-file btn btn-pn-circulo btn-cor-padrao" style="color: #3D276B"></i></a>
                    
                    @endif

                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="" style="width:100%">
                <tr>
                    <th style="width:37%;">
                       {{--   <p>Top 5</p>  --}}
                    </th>
                    <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <p class="">Bairro</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <p class="">% de Inscritos</p>
                        </div>
                    </th>
                </tr>
                <tr>
                    <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                    </td>
                    <td>
                        <table class="tile_info bairros">

                            @foreach($bairros as $bairro => $qtd)
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square" style="color: {{ $qtd[2] }}"></i>{{ $bairro }}</p>
                                    </td>
                                    <td>{{ number_format($qtd[0], 1) }}%</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>