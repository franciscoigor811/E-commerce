function muda() {
  var id = document.getElementById("checkbox").innerHTML;
  var c = document.getElementById("ativo");
  if (id == "Ativa") {
    document.getElementById("checkbox").innerHTML = "Inativa";
    c.setAttribute("value", "false");
  }
  if (id == "Inativa") {
    document.getElementById("checkbox").innerHTML = "Ativa";
    c.setAttribute("value", "true");
  }
}
function view() {
  var c = document.getElementById("ativo");
  var id = document.getElementById("checkbox");
  if (c.hasAttribute("checked")==true) {
    id.innerHTML = "Ativa";
  } else {
    id.innerHTML = "Inativa";
  }
}
window.onload = view();