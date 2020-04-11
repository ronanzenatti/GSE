@extends('template')
<?php
$cor = (isset($sh['id_sh'])) ? "warning" : "success";
?>
@section('titulo', 'Situação Habitacional')
@section('box-color', 'box-' . $cor)
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header" style="padding-right: 10px; padding-left: 10px; margin: 10px 0 0 0;">
                <i class="fa fa-user"></i> <strong class="text-primary"> &nbsp;
                    Adolescente: </strong>{{mb_strtoupper($ado['nome'], 'UTF-8')}}
                <span class="pull-right"><strong class="text-primary">RG:</strong> {{$doc['rg']}}</span>
                <br/>
                <i class="fa fa-home"></i>&nbsp;
                <strong class="text-primary">Endereço: </strong> {{$end['logradouro'] . ", " .$end['numero']}}
                - {{$end['bairro']}}, {{$end['cidade']}}-{{$end['estado']}}<br>
            </h2>
        </div>
    </div>
    <form role="form" action="{{base_url('SituacaoHabitacional/save')}}" method="post">
        <input name="id_sh" id="id_sh" type="hidden" value="{{(isset($sh['id_sh']) ? $sh['id_sh'] : null)}}"/>
        <input name="id_endereco" id="id_endereco" type="hidden"
               value="{{(isset($end['id_endereco']) ? $end['id_endereco'] : null)}}"/>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="col-sm-2 col-sm-offset-1">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="minimal-blue" {{($sh['agua']) ? 'checked' : null }} id="agua"
                                   name="agua" value="1">&nbsp;
                            <strong>Agua</strong>
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="minimal-blue"
                                   {{($sh['esgoto']) ? 'checked' : null }} id="esgoto" name="esgoto" value="1">&nbsp;
                            <strong>Esgoto</strong>
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="minimal-blue"
                                   {{($sh['energia']) ? 'checked' : null }} id="energia" name="energia" value="1">&nbsp;
                            <strong>Energia</strong>
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="minimal-blue"
                                   {{($sh['pavimento']) ? 'checked' : null }} id="pavimento" name="pavimento"
                                   value="1">&nbsp;
                            <strong>Pavimentação</strong>
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="minimal-blue"
                                   {{($sh['coleta_lixo']) ? 'checked' : null }} id="coleta_lixo" name="coleta_lixo"
                                   value="1">&nbsp;
                            <strong>Coleta de Lixo</strong>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="tipo">Tipo:</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value=""> - SELECIONE -</option>
                            <option value="1">Casa</option>
                            <option value="2">Apartamento</option>
                            <option value="3">Barraco</option>
                            <option value="4">Cortiço</option>
                            <option value="5">Pensão</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="situacao">Situação:</label>
                        <select class="form-control" id="situacao" name="situacao" required>
                            <option value=""> - SELECIONE -</option>
                            <option value="1">Próprio</option>
                            <option value="2">Financiado</option>
                            <option value="3">Alugado</option>
                            <option value="4">Cedido</option>
                            <option value="5">Invadido</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control text-right Money2" id="valor" name="valor"
                               value="{{(isset($sh['valor']) ? number_format($sh['valor'], 2, ',', '.') : null)}}">
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-sm-4">
                    <label for="qtde_comodos">Qtde. de Cômodos:</label>
                    <input type="number" class="form-control text-center" id="qtde_comodos" name="qtde_comodos"
                           value="{{(isset($sh['qtde_comodos']) ? $sh['qtde_comodos'] : null)}}">
                </div>
                <div class="col-sm-4">
                    <label for="qtde_pessoas">Qtde. de Pessoas:</label>
                    <input type="number" class="form-control text-center" id="qtde_pessoas" name="qtde_pessoas"
                           value="{{(isset($sh['qtde_pessoas']) ? $sh['qtde_pessoas'] : null)}}">
                </div>
                <div class="col-sm-4">
                    <label for="espaco">Espaço (m²):</label>
                    <input type="text" class="form-control text-right Money2" id="espaco" name="espaco"
                           value="{{(isset($sh['espaco']) ? number_format($sh['espaco'], 2, ',', '.') : null)}}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="obs">Observações:</label>
                    <textarea name="obs" id="obs"
                              class="form-control">{{(isset($sh['obs']) ? $sh['obs'] : null)}}</textarea>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <a href="{{base_url("adolescente")}}" class="btn btn-default">Voltar</a>
                </div>
                <div class="col-sm-4 text-center">
                    <button type="reset" class="btn btn-default">Limpar</button>
                </div>
                <div class="col-sm-4 text-right">
                    <button type="submit" class="btn btn-{{$cor}}">Salvar</button>
                </div>
            </div>

        </div>
    </form>
@endsection
@section('js')
    <!-- CKEDITOR -->
    <script src="{{base_url()}}assets/bower_components/ckeditor/ckeditor.js"></script>
    <script src="{{base_url()}}assets/bower_components/ckeditor/lang/pt-br.js"></script>

    <script>
        @if(isset($sh['id_sh']))
        $('#tipo').val("{{$sh['tipo']}}").trigger('change');
        $('#situacao').val("{{$sh['situacao']}}").trigger('change');
        @endif

        $('input[type="checkbox"].minimal-blue, input[type="radio"].minimal-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        $("form").validate();

        CKEDITOR.replace('obs', {
            customConfig: 'config.js'
        });

    </script>
@endsection
