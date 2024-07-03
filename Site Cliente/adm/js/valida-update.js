var valcpf = false;
var valsenha = false;

function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
        return false

    if (c == "00000000000")
        return false;

    if (c == "11111111111") 
        return false; 

    if (c == "22222222222") 
        return false; 

    if (c == "33333333333") 
        return false; 

    if (c == "44444444444") 
        return false; 

    if (c == "55555555555") 
        return false; 

    if (c == "66666666666") 
        return false; 

    if (c == "77777777777") 
        return false; 

    if (c == "88888888888") 
        return false; 

    if (c == "99999999999") 
        return false;

    var r;
    var s = 0;

    for (i=1; i<=9; i++)
        s = s + parseInt(c[i-1]) * (11 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
        r = 0;

    if (r != parseInt(c[9]))
        return false;

    s = 0;

    for (i = 1; i <= 10; i++)
        s = s + parseInt(c[i-1]) * (12 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
        r = 0;

    if (r != parseInt(c[10]))
        return false;

    return true;
}

function cpfCheck () {
    var cpf = document.getElementById('CPF').value;
    if (is_cpf(cpf) == true)
        valcpf = true;
    else
        valcpf = false;

    if(cpf=='')
       valcpf = false;
}

function senhaCheck () {
    var senha = document.getElementById('inputPassword').value;
    var confirma = document.getElementById('confirmPassword').value;

    if (senha == confirma)
        valsenha = true;
    else
        valsenha = false;
    if (senha == "" && confirma == "")
        valsenha = true;
    else if (senha == "" || confirma == "")
        valsenha = false;
}

function buttonBlock () {
    senhaCheck();
    cpfCheck();
    var b = document.getElementById('botão');
    
    if (valsenha == false) {
        if (valcpf == false) {
            b.disabled = true;
            b.innerHTML = "O CPF digitado é inválido e as senhas digitadas são diferentes";
            b.setAttribute("class", "btn btn-danger btn-block");
        } else {
            b.disabled = true;
            b.innerHTML = "As senhas digitadas são diferentes";
            b.setAttribute("class", "btn btn-danger btn-block");
        }
    } else {
        if (valcpf == false) {
            b.disabled = true;
            b.innerHTML = "O CPF digitado é inválido";
            b.setAttribute("class", "btn btn-danger btn-block");
        }
        else {
            b.disabled = false;
            b.innerHTML = "Editar";
            b.setAttribute("class", "btn btn-primary btn-block");
        }
    }
}

window.onload = buttonBlock();