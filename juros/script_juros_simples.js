const btn = document.querySelector("#ver");
btn.addEventListener("click", function (e) {
   e.preventDefault();
});

var pegartaxa = "";
var pegarcap = "";
var pegarmeses = "";

function vendo() {
   pegarcap = parseFloat(document.getElementById('capital').value);
   pegartaxa = parseFloat(document.getElementById('taxa').value);
   pegarmeses = parseInt(document.getElementById('meses').value);

   var juros = (pegarcap * (pegartaxa / 100) * pegarmeses);
   var montante = pegarcap + juros;
   var formattedMontante = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(montante);
   document.getElementById('montantemo').innerHTML = formattedMontante;
}
