const btn = document.querySelector("#ver");
btn.addEventListener("click", function (e) {
  e.preventDefault();
});

var pegartaxa = "";
var pegarcap = "";
var pegarmeses = "";

function vendo() {
  pegarcap = document.getElementById('capital').value;
  pegartaxa = document.getElementById('taxa').value;
  pegarmeses = document.getElementById('meses').value;

  var montante = pegarcap * (1 + (pegartaxa / 100)) ** pegarmeses;
  montante = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(montante);
  document.getElementById('montantemo').innerHTML = montante;
}
