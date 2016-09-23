
<div class="content"> <!-- Inicio da DIV content -->
    <div id="accordion">
        <h3 class="singular"><a href="#">Cadastro de Honor&aacute;rios M&eacute;dicos</a></h3>
        <div>
            <form name="form_ficha_xml" id="form_ficha_xml" action="<?= base_url() ?>ambulatorio/guia/gravarfichaxml/<?= $paciente_id?>/<?= $guia_id?>/<?= $exames_id?>" method="post">


                <dt>
                    <label>Trabalha ou trabalhou com metais?</label>

                <dd>
                    <select name="p1" id="p1" class="size1">
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>
                    </select>               
                </dd>
                <br/>
                <dt>                         
                    <label>Tem ou teve fragmentos metálicos no olhos?</label>
                </dt>                    
                <dd>                       
                    <select name="p2" id="p2" class="size1">
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>

                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem ou teve projétil de arma de fogo no corpo (bala ou fragmentos metálicos de qualquer tipo?)? </label>
                </dt>
                <dd>
                    <select  name="p3" id="p3" class="size1" >
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>
                    </select>

                </dd>
                <br/>
                <dt>
                    <label>Tem marcapasso cardíaco, desribilador ou cardioverter?</label>
                </dt>
                <dd>                    
                    <select name="p4" id="p4" class="size1">
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem clipes de aneurisma no cérebro?</label>
                </dt>
                <dd>
                    <select name="p5"  id="p5" class="size1">
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem "PUMPS" ou neuroestimuladores implantados?</label>
                </dt>
                <dd>
                    <select name="p6"  id="p6" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Fez substituicao de valvulas cardiacas?</label>
                </dt>
                <dd>
                    <select name="p7"  id="p7" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem implantes no ouvido (coclear, estribo) ou aparelho auditivo?</label>
                </dt>
                <dd>
                    <select name="p8"  id="p8" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem algum componente artificial no corpo?</label>
                </dt>
                <dd>
                    <select name="p9"  id="p9" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem protese, hastes, placas ou parafuso metalicos no corpo?</label>
                </dt>
                <dd>
                    <select name="p10"  id="p10" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem protese dentaria, aparelho ortodontico ou peruca?</label>
                </dt>
                <dd>
                    <select name="p11"  id="p11" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem implante peniano?</label>
                </dt>
                <dd>
                    <select name="p12"  id="p12" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem D.I. udispositivo contraceptivo intra-uterino?</label>
                </dt>
                <dd>
                    <select name="p13"  id="p13" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Consegue ficar deitado de costas e sentir-se confortavel num</label>
                    <label>espaco pequeno durante aproximadamente 1/2 hora?</label>
                </dt>
                <dd>
                    <select name="p14"  id="p14" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Ja fez tratamento quimioterapico ou radioterapico?</label>
                </dt>
                <dd>
                    <select name="p15"  id="p15" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Tem problema de insuficiencia renal?</label>
                </dt>
                <dd>
                    <select name="p16"  id="p16" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Existe alguma possibilidade de voce estar gravida?</label>
                </dt>
                <dd>
                    <select name="p17"  id="p17" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                <dt>
                    <label>Esta amamentando?</label>
                </dt>
                <dd>
                    <select name="p18"  id="p18" class="size1">                            
                        <option value="SIM">SIM</option> 
                        <option value="NAO">NÃO</option>                                   
                    </select>
                </dd>
                <br/>
                </dl>    
                <hr/>
                <button type="submit" name="btnEnviar">Enviar</button>
                <button type="reset" name="btnLimpar">Limpar</button>
                <button type="button" id="btnVoltar" name="btnVoltar">Voltar</button>
            </form>

        </div>
    </div>
</div> <!-- Final da DIV content -->
<script type="text/javascript">
    $('#btnVoltar').click(function () {
        $(location).attr('href', '<?= base_url(); ?>ponto/cargo');
    });

    $(function () {
        $("#accordion").accordion();
    });




</script>