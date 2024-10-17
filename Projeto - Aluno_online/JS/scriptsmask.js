// JavaScript Document
//adiciona mascara de cnpj
function MascaraCNPJ(cnpj) {
    if (mascaraInteiro(cnpj) == false) {
        event.returnValue = false;
    }
    return formataCampo(cnpj, '00.000.000/0000-00', event);
}

//adiciona mascara de cep
function MascaraCep(cep) {
    if (mascaraInteiro(cep) == false) {
        event.returnValue = false;
    }
    return formataCampo(cep, '00.000-000', event);
}

//adiciona mascara de data
function MascaraData(data) {
    if (mascaraInteiro(data) == false) {
        event.returnValue = false;
    }
    return formataCampo(data, '00/00/0000', event);
}

//adiciona mascara ao telefone
function MascaraTelefone(telefone) {
    if (mascaraInteiro(telefone) == false) {
        event.returnValue = false;
    }
    return formataCampo(telefone, '0000-0000', event);
}
function MascaraTelefone_Resp(telefone_resp) {
    if (mascaraInteiro(telefone_resp) == false) {
        event.returnValue = false;
    }
    return formataCampo(telefone_resp, '00000-0000', event);
}
function MascaraTelefone_whatsapp(whatsapp) {
    if (mascaraInteiro(whatsapp) == false) {
        event.returnValue = false;
    }
    return formataCampo(whatsapp, '00000-0000', event);
}
//adiciona mascara ao telefone entidade
function MascaraTelefone_entidade(telefone_entidade) {
    if (mascaraInteiro(telefone_entidade) == false) {
        event.returnValue = false;
    }
    return formataCampo(telefone, '0000-0000', event);
}
//adiciona mascara ao celular
function MascaraCelular(celular) {
    if (mascaraInteiro(celular) == false) {
        event.returnValue = false;
    }
    return formataCampo(celular, '00000-0000', event);
}

//adiciona mascara ao CPF
function MascaraCPF(cpf) {
    if (mascaraInteiro(cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(cpf, '000.000.000-00', event);
}
//adiciona mascara ao CPF 1
function MascaraCPF1(pergunta3_1_cpf) {
    if (mascaraInteiro(pergunta3_1_cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(pergunta3_1_cpf, '000.000.000-00', event);
}
//adiciona mascara ao CPF 2
function MascaraCPF2(pergunta3_2_cpf) {
    if (mascaraInteiro(pergunta3_2_cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(pergunta3_2_cpf, '000.000.000-00', event);
}
//adiciona mascara ao CPF 3
function MascaraCPF3(pergunta3_3_cpf) {
    if (mascaraInteiro(pergunta3_3_cpf) == false) {
        event.returnValue = false;
    }
    return formataCampo(pergunta3_3_cpf, '000.000.000-00', event);
}


//valida telefone
function ValidaTelefone(telefone) {
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if (!exp.test(telefone.value))
        alert('Numero de Telefone Invalido!');
}
//valida celular
function ValidaCelular(celular) {
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if (!exp.test(celular.value))
        alert('Numero de Celular Invalido!');
}
//valida CEP
function ValidaCep(cep) {
    exp = /\d{2}\.\d{3}\-\d{3}/
    if (!exp.test(cep.value))
        alert('Numero de Cep Invalido!');
}

//valida data
function ValidaData(data) {
    exp = /\d{2}\/\d{2}\/\d{4}/
    if (!exp.test(data.value))
        alert('Data Invalida!');
}

//valida o CPF digitado
function ValidarCPF(Objcpf) {
    var pergunta3_1_cpf = Objcpf.value;
    exp = /\.|\-/g
    pergunta3_1_cpf = pergunta3_1_cpf.toString().replace(exp, "");
    var digitoDigitado = eval(pergunta3_1_cpf.charAt(9) + pergunta3_1_cpf.charAt(10));
    var soma1 = 0, soma2 = 0;
    var vlr = 11;

    for (i = 0; i < 9; i++) {
        soma1 += eval(pergunta3_1_cpf.charAt(i) * (vlr - 1));
        soma2 += eval(pergunta3_1_cpf.charAt(i) * vlr);
        vlr--;
    }
    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

    var digitoGerado = (soma1 * 10) + soma2;
    if (digitoGerado != digitoDigitado)
        alert('CPF Invalido!');
    value = "";
}
//valida o CPF digitado
function ValidarCPF1(Objcpf) {
    var pergunta3_1_cpf = Objcpf.value;
    exp = /\.|\-/g
    pergunta3_1_cpf = pergunta3_1_cpf.toString().replace(exp, "");
    var digitoDigitado = eval(pergunta3_1_cpf.charAt(9) + pergunta3_1_cpf.charAt(10));
    var soma1 = 0, soma2 = 0;
    var vlr = 11;

    for (i = 0; i < 9; i++) {
        soma1 += eval(pergunta3_1_cpf.charAt(i) * (vlr - 1));
        soma2 += eval(pergunta3_1_cpf.charAt(i) * vlr);
        vlr--;
    }
    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

    var digitoGerado = (soma1 * 10) + soma2;
    if (digitoGerado != digitoDigitado)
        alert('CPF Invalido!');
    value = "";
}
function ValidarCPF2(Objcpf) {
    var pergunta3_2_cpf = Objcpf.value;
    exp = /\.|\-/g
    pergunta3_2_cpf = pergunta3_2_cpf.toString().replace(exp, "");
    var digitoDigitado = eval(pergunta3_2_cpf.charAt(9) + pergunta3_2_cpf.charAt(10));
    var soma1 = 0, soma2 = 0;
    var vlr = 11;

    for (i = 0; i < 9; i++) {
        soma1 += eval(pergunta3_2_cpf.charAt(i) * (vlr - 1));
        soma2 += eval(pergunta3_2_cpf.charAt(i) * vlr);
        vlr--;
    }
    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

    var digitoGerado = (soma1 * 10) + soma2;
    if (digitoGerado != digitoDigitado)
        alert('CPF Invalido!');
    value = "";
}
function ValidarCPF3(Objcpf) {
    var pergunta3_3_cpf = Objcpf.value;
    exp = /\.|\-/g
    pergunta3_3_cpf = pergunta3_3_cpf.toString().replace(exp, "");
    var digitoDigitado = eval(pergunta3_3_cpf.charAt(9) + pergunta3_3_cpf.charAt(10));
    var soma1 = 0, soma2 = 0;
    var vlr = 11;

    for (i = 0; i < 9; i++) {
        soma1 += eval(pergunta3_3_cpf.charAt(i) * (vlr - 1));
        soma2 += eval(pergunta3_3_cpf.charAt(i) * vlr);
        vlr--;
    }
    soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
    soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

    var digitoGerado = (soma1 * 10) + soma2;
    if (digitoGerado != digitoDigitado)
        alert('CPF Invalido!');
    value = "";
}

//valida numero inteiro com mascara
function mascaraInteiro() {
    if (event.keyCode < 48 || event.keyCode > 57) {
        event.returnValue = false;
        return false;
    }
    return true;
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj) {
    var cnpj = ObjCnpj.value;
    var valida = new Array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
    var dig1 = new Number;
    var dig2 = new Number;

    exp = /\.|\-|\//g
    cnpj = cnpj.toString().replace(exp, "");
    var digito = new Number(eval(cnpj.charAt(12) + cnpj.charAt(13)));

    for (i = 0; i < valida.length; i++) {
        dig1 += (i > 0 ? (cnpj.charAt(i - 1) * valida[i]) : 0);
        dig2 += cnpj.charAt(i) * valida[i];
    }
    dig1 = (((dig1 % 11) < 2) ? 0 : (11 - (dig1 % 11)));
    dig2 = (((dig2 % 11) < 2) ? 0 : (11 - (dig2 % 11)));

    if (((dig1 * 10) + dig2) != digito)
        alert('CNPJ Inv�lido. Tente Novamente!');
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) {
    var boleanoMascara;

    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace(exp, "");

    var posicaoCampo = 0;
    var NovoValorCampo = "";
    var TamanhoMascara = campoSoNumeros.length;
    ;

    if (Digitato != 8) { // backspace 
        for (i = 0; i <= TamanhoMascara; i++) {
            boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                    || (Mascara.charAt(i) == "/"))
            boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(")
                    || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
            if (boleanoMascara) {
                NovoValorCampo += Mascara.charAt(i);
                TamanhoMascara++;
            } else {
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = NovoValorCampo;
        return true;
    } else {
        return true;
    }
}
//Ainda, nesse código, inseri uma Máscara para RG, muito fácil:

//adiciona mascara ao RG
function MascaraRG(rg) {
    if ((rg) == false) {
        event.returnValue = false;
    }
    return formataCampo(rg, '00.000.000-0', event);
}

//validação de campo RA
function valida_dados(nomeform)
{
    if (nomeform.ra.selectedIndex == 0)
    {
        alert("Por favor selecione uma Cidade.");
        return false;
    }

    return true;
}
//validação de campo Tipo de documento
function valida_dados(nomeform)
{
    if (nomeform.id_tipo_documento.selectedIndex == 0)
    {
        alert("Por favor selecione um Documento.");
        return false;
    }

    return true;
}

//Campo somente N�meros
function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    // charCode 8 = backspace   
    // charCode 9 = tab
    if (charCode != 8 && charCode != 9) {
        // charCode 48 equivale a 0   
        // charCode 57 equivale a 9
        if (charCode < 48 || charCode > 57) {
            return false;
        }
    }
}

//Ocultar data Vigencia
window.onload = function () {
    id('id_tipo_documento').onchange = function () {
        if (this.value == 1 || this.value == 2 || this.value == 13 || this.value == 14 || this.value == 15 || this.value == 16) {
            ////CAMPOS SEM DATA DE VIGENCIA=> 01=CNPJ, 02=ESTATUTO, 13=ALVARA, 14=OUTROS, 15=RG, 16=CPF
            id('divtal').style.display = 'none';
            id('divtal2').style.display = 'none';
        } else if (this.value == 5) {
            //MOSTAR CAMPO DATA INDERTEMINADA=> 05=CAS
            id('divtal').style.display = 'none';
            id('divtal2').style.display = 'block';
        } else {
            //MOSTAR CAMPO DE DATA DE VIGENCIA=> 03=ATA, 04=CREDECIAMENTO, 06=OSCIP, 07=CDCA, 08=CDI, 09=CONEM, 10=CEBAS
            id('divtal2').style.display = 'none';
            id('divtal').style.display = 'block';
        }
    }
}

function id(el) {
    return document.getElementById(el);
}

//mascar de moeda
function moeda(a, e, r, t) {
    let n = ""
            , h = j = 0
            , u = tamanho2 = 0
            , l = ajd2 = ""
            , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
            -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
            h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
            0 == (u = l.length) && (a.value = ""),
            1 == u && (a.value = "0" + r + "0" + l),
            2 == u && (a.value = "0" + r + l),
            u > 2) {
        for (ajd2 = "",
                j = 0,
                h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
                    j = 0),
                    ajd2 += l.charAt(h),
                    j++;
        for (a.value = "",
                tamanho2 = ajd2.length,
                h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
/////////////////
///Limita caracteres no textarea
function limitaTextarea(valor) {
    quantidade = 800;
    total = valor.length;
    if (total <= quantidade) {
        resto = quantidade - total;
        document.getElementById('contador').innerHTML = resto;

    } else {
        document.getElementById('texto').value = valor.substr(0, quantidade);
    }
}
////////////////////////
///converte minusculas em maiusculas
function up(lstr)
{
    var str = lstr.value; //obtem o valor
    lstr.value = str.toUpperCase(); //converte as strings e retorna ao campo
}
