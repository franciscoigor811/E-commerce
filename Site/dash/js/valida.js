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
cpfCheck = function (el) {
    var b = document.getElementById('botão');
    if (is_cpf(el.value) == true) {
        document.getElementById('botão').disabled = false;
        b.setAttribute("title", "");
    } else {
        b.setAttribute("disabled", "disabled");
        b.setAttribute("title", "O CPF digitado é inválido.");
    }

    if(el.value=='') {
        b.setAttribute("disabled", "disabled");
        b.setAttribute("title", "O CPF digitado é inválido.");
    }
}