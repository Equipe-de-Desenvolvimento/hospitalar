<div class="content"> <!-- Inicio da DIV content -->

    <div class="bt_link_new">
        <a href="<?php echo base_url() ?>emergencia/emergencia/novaevolucao/<?=$ficha?>">
            Nova Evolução
        </a>
    </div>
    <div id="accordion">
        <h3><a href="#">Evolu&ccedil;&atilde;o selecionada:</a></h3>
        <div>
            <table><!-- Início da lista de pensionistas -->

                <thead>
                    <tr>
                        <th class="tabela_header">Evolu&ccedil;&atilde;o</th>
                        <th class="tabela_header">CID PRIMARIO</th>
                        <th class="tabela_header">Plano terapeutico</th>
                        <th class="tabela_header" colspan="3" width="70px"><center>A&ccedil;&otilde;es</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    if (count($lista) > 0) :
                        $i=0;
                        foreach ($lista as $item) {
                            if ($i%2 == 0) : $classe = "tabela_content01";
                            else: $classe = "tabela_content02";
                            endif;
                            //$ficha_id = $item->ficha_id;
                            ?>
                    <tr>
                        <td class="<?=$classe;?>"><?=$item->evolucao_id;?></td>
                        <td class="<?=$classe;?>"><?=$item->cid_pri;?></td>
                        <td class="<?=$classe;?>"><?=$item->plano_terapeutico_imediato;?></td>
                        <td class="<?=$classe;?>" width="50px;" ><div class="bt_link">
                            <a onclick="javascript: return confirm('Deseja realmente exlcuir esse registro?');"
                               href="<?=  base_url()?>emergencia/emergencia/excluirevolucao/<?=$item->evolucao_id;?>/<?=$ficha?>">
                                <b>excluir</b>
                            </a>
                            </div>
                        </td>
                        <td class="<?=$classe;?>" width="50px;" ><div class="bt_link">
                            <a  href="<?=  base_url()?>emergencia/emergencia/relatorioevolucao/<?=$item->evolucao_id;?>">
                                <b>relatorio</b>
                            </a>
                            </div>    
                        </td>
                    </tr>
                            <?
                            $i++;
                        }
                    else :
                        ?>
                    <tr>
                        <td class="tabela_content01" colspan="4">Sem Evolu&ccedil;&atilde;o cadastrada.</td>
                    </tr>
                    <? endif; ?>
              </tbody>
                <tfoot>
                    <tr>
                        <th class="tabela_footer" colspan="6">Evolu&ccedil;&otilde;es: <?=count($lista); ?></th>
                    </tr>
                </tfoot>
            </table><!-- Fim da lista de pensionistas -->
        </div>
     </div>
</div> <!-- Final da DIV content -->
<link rel="stylesheet" href="<?= base_url()?>css/jquery-ui-1.8.5.custom.css">
<script type="text/javascript">

    $(function() {
        $( "#servidor" ).accordion();
        $( "#accordion" ).accordion();
    });

  </script>
