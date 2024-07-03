$(document).on('scroll', function() {
  console.clear();
  if ($(this).scrollTop() >= $('#page-top').position().top && $(this).scrollTop() <= $('#services').position().top) {
    console.log("Início");
  }
  if ($(this).scrollTop() >= $('#services').position().top && $(this).scrollTop() <= $('#portfolio').position().top) {
    console.log("Serviços");
  }
  if ($(this).scrollTop() >= $('#portfolio').position().top && $(this).scrollTop() <= $('#about').position().top) {
    console.log("Portfólio");
  }
  if ($(this).scrollTop() >= $('#about').position().top && $(this).scrollTop() <= $('#team').position().top) {
    console.log("Sobre");
  }
  if ($(this).scrollTop() >= $('#team').position().top && $(this).scrollTop() <= $('#contact').position().top) {
    console.log("Equipe");
  }
  if ($(this).scrollTop() >= $('#contact').position().top && $(this).scrollTop() <= $('#maps').position().top) {
    console.log("Contato");
  }
  if ($(this).scrollTop() >= $('#maps').position().top) {
    console.log("Localização");
  }
})