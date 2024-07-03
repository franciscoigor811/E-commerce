$(document).on("input", "#mensagem", function () {
    var limite = 150;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;

    $(".caracteres").text(caracteresRestantes);
});