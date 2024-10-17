<!DOCTYPE html>
<?php
include_once './header.php';
include './scriptsPHP/validarCnpj.php';
require_once './dao/loginDAO.php';
$cnpj = $_POST["cnpj"];
$senhaCnpj= str_replace(".","", $cnpj);
$senhaCnpj = substr($senhaCnpj, 0, 6);
//var_dump($senhaCnpj);
//die();
$razao_social = $_POST["razao_social"];
$loginDAO = new LoginDAO();
$entidade = $loginDAO->entidade($cnpj, $razao_social);
?>
<?php
if ($entidade != NULL) {
    $cnpj = $_POST["cnpj"];
    echo "<script>";
    echo "alert('CNPJ: $cnpj | Razão Social: $razao_social,  já está cadastrado em nossa Base de Dados. Faça login para entrar no sistema!');";
    echo "window.location.href = './login.php';";
    echo "</script> ";
}
// Valida um CNPJ
if (valida_cnpj($cnpj)) {
    // echo "CNPJ correto. <br>";
} else {
    echo "<script>";
    echo "alert('CNPJ Inválido. Tente Novamente!');";
    echo "window.location.href = './primeiroAcesso.php';";
    echo "</script> ";
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sices</title>
        <link rel="shortcut icon" href="https://sescdf.com.br/wp-content/uploads/2015/05/icone_portal.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/scriptsmask.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <br>
            <br>
            <br>
            <br>
            <div class="card text-white font-weight-bold bg-secondary" style="margin-top: 5px;">
                <div class="card-body">1. Aspectos Gerais</div>
            </div>
            <form action="controller/entidadeController.php" method="post" name="form1" onSubmit="return valida_dados(this)" onsubmit="this.enviar.value = 'Enviando...'; this.enviar.disabled = true;">
                <input type="hidden" name="opcao" value="1">
                <input type="hidden" name="idperfil" value="2">
                <input type="hidden" name="atualizado" value="1">
                <div class="card-group">
                    <div class="card bg-default">
                        <div class="card-body">
                            <div class="form-group font-weight-bold">
                                <label for="cnpj">CNPJ
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="cnpj" readonly=""  value="<?php echo $cnpj; ?>" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="razao_social">Raz&atilde;o Social 
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right"  title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="razao_social" required="" readonly="" value="<?php echo $razao_social; ?>">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="nome_fantasia">Nome Fantasia 
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right"  title="Campo Obrigat&oacute;rio!" >*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="nome_fantasia" onkeypress="return removeEspecias(event)" onkeyup="up(this)" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="endereco">Endere&ccedil;o
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="endereco" onkeypress="return removeEspecias(event)" onkeyup="up(this)" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="ra">RA 
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <select class="form-control col-6" id="ra" name="ra" required="required">
                                    <option value="&Aacute;guas Claras">Águas Claras</option>
                                    <option value="Arniqueira">Arniqueira</option>
                                    <option value="Brazl&acirc;ndia">Brazlândia</option>
                                    <option value="Candangol&acirc;ndia">Candangolândia</option>
                                    <option value="Ceil&acirc;ndia">Ceilândia</option>
                                    <option value="Cruzeiro">Cruzeiro</option>
                                    <option value="Fercal">Fercal</option>
                                    <option value="Gama">Gama</option>
                                    <option value="Guar&aacute;">Guará</option>
                                    <option value="Itapo&atilde;">Itapoã</option>
                                    <option value="Jardim Bot&acirc;nico">Jardim Botânico</option>
                                    <option value="Lago Norte">Lago Norte</option>
                                    <option value="Lago Sul">Lago Sul</option>
                                    <option value="N&uacute;cleo Bandeirante">Núcleo Bandeirante</option>
                                    <option value="Parano&aacute;">Paranoá</option>
                                    <option value="Park Way">Park Way</option>
                                    <option value="Planaltina">Planaltina</option>
                                    <option value="Plano Piloto">Plano Piloto</option>
                                    <option value="Recanto das Emas">Recanto das Emas</option>
                                    <option value="Riacho Fundo I">Riacho Fundo I</option>
                                    <option value="Riacho Fundo II">Riacho Fundo II</option>
                                    <option value="Samambaia">Samambaia</option>
                                    <option value="Santa Maria">Santa Maria</option>
                                    <option value="S&atilde;o Sebasti&atilde;o">São Sebastião</option> 
                                    <option value="SCIA/Estrutural">SCIA/Estrutural</option>
                                    <option value="SIA">SIA</option>
                                    <option value="Sobradinho">Sobradinho</option>
                                    <option value="Sobradinho II">Sobradinho II</option>
                                    <option value="Sudoeste/Octogonal">Sudoeste/Octogonal</option>
                                    <option value="Taguatinga">Taguatinga</option>
                                    <option value="Varj&atilde;o">Varjão</option>
                                    <option value="Vicente Pires">Vicente Pires</option>
                                    <option value="Sol Nascente e Pôr do Sol">Sol Nascente e Pôr do Sol</option>
                                </select>
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="cep">CEP
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="cep" required="" onKeyPress="MascaraCep(form1.cep);"
                                       maxlength="10" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="ponto_referencia">Ponto Refer&ecirc;ncia 
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="ponto_referencia" onkeypress="return removeEspecias(event)" onkeyup="up(this)" required="required">
                            </div> 
                        </div>
                    </div>
                    <div class="card bg-default">
                        <div class="card-body">
                            <div class="form-group font-weight-bold">
                                <label for="telefone">Telefone Fixo
                                </label>
                                <input type="tel" class="form-control col-12" name="telefone" placeholder="0000-0000" required="required" onKeyPress="MascaraTelefone(form1.telefone);" 
                                       maxlength="9">
                            </div>
                            <div class="form-group font-weight-bold">
                                <label for="celular">Celular
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="tel" class="form-control col-12" name="celular" placeholder="00000-0000" required="" onKeyPress="MascaraCelular(form1.celular);" 
                                       maxlength="10" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="email">E-mail Institucional 
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="email" class="form-control col-12" name="email" required="required" >
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="nome_representante">Nome do Representante
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="nome_representante" onkeypress="return removeEspecias(event)" onkeyup="up(this)" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="rg">RG
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="rg" required="" onKeyPress="MascaraRG(form1.rg);"
                                       maxlength="12" required="required">
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="cpf">CPF
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="cpf" required="required" onKeyPress="MascaraCPF(form1.cpf);" onBlur="ValidarCPF(form1.cpf);"
                                       maxlength="14">
                            </div>
                            <div class="form-group font-weight-bold">
                                <label for="responsavel_contato">Responsável Pelo Contato com o Programa Mesa Brasil
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="text" class="form-control col-12" name="responsavel_contato" onkeypress="return removeEspecias(event)" onkeyup="up(this)" required="required">
                            </div>  
                        </div>
                    </div>
                    <div class="card bg-default">
                        <div class="card-body">

                            <div class="form-group font-weight-bold">
                                <label for="telefone_resp">Telefone Responsável
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="tel" class="form-control col-12" name="telefone_resp" maxlength="10" placeholder="00000-0000" required="required" onKeyPress="MascaraTelefone_Resp(form1.telefone_resp);" >
                            </div>  
                            <div class="form-group font-weight-bold">
                                <label for="whatsapp">WhatsApp
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="tel" class="form-control col-12" name="whatsapp" required="required" placeholder="00000-0000" maxlength="10" onKeyPress="MascaraTelefone_whatsapp(form1.whatsapp);" >

                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="email_resp">E-mail Responsável
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                                <input type="email" class="form-control col-12" name="email_resp" required="required">
                            </div>  
                            <div class="card text-white font-weight-bold bg-secondary" style="margin-top: 5px;">
                                <div class="card-body">1.1 Caracteristica da Entidade  
                                </div>
                            </div>
                            <br>
                            <div class="form-group font-weight-bold">
                                <label for="email_resp">Escolha a Característica
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="Campo Obrigat&oacute;rio!">*</b>
                                </label>
                            </div>
                            <div class="form-group font-weight-bold">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="caracteristica_entidade1" name="caracteristica_entidade" required="required" value="1">
                                    <label class="custom-control-label" for="caracteristica_entidade1">Entidade Beneficente de Assistência Social</label>
                                </div>  
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="caracteristica_entidade2" name="caracteristica_entidade" value="2">
                                    <label class="custom-control-label" for="caracteristica_entidade2">Organização da Sociedade de Interesse Público-OSCIP</label>
                                </div> 
                            </div> 
                            <div class="form-group font-weight-bold">
                                <label for="senha">Senha<br>
                                    <b style='color:red;' data-toggle="tooltip" data-placement="right" title="A Senha é composta por 6 primeiros  digitos do CNPJ.">A Senha é composta por 6 primeiros  digitos do CNPJ.</b>
                                </label>
                                <input type="text" class="form-control col-4" max="999999" maxlength="6" id="senha" name="senha"readonly="" value="<?php echo $senhaCnpj;?>">
                                
                            </div> 
                            <center>
                                <div class="btn-group mx-auto d-block" style="margin-top: 5px;">
                                    <a href="login.php" class="btn btn-danger">Voltar</a>
                                    <input type="reset" class="btn btn-warning" value="Limpar">
                                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="enviar">
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </form> 
            <br>
            <br>
        </div>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <?php
        include_once './footer.php';
        ?>
    </body>
</html>
<script>
    function removeEspecias(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
</script>  
