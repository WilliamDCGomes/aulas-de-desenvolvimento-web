document.getElementById("abrir-facebook").onclick = function() {
	window.open("https://www.facebook.com/", "minhaJanela");
}
document.getElementById("abrir-instagram").onclick = function() {
	window.open("https://www.instagram.com/", "minhaJanela");
}
document.getElementById("chamar-whatsapp").onclick = function() {
	alert("Entre em contato: (14) 99907-5693");
}
document.getElementById("abrir-linkedin").onclick = function() {
	window.open("https://www.instagram.com/", "minhaJanela");
}
document.getElementById("abrir-email").onclick = function() {
	alert("Entre em contato: williamdouglasgomes@hotmail.com");
}
document.getElementsByClassName("foto")[0].onclick = function() {
	window.open("imagem/site.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[1].onclick = function() {
	window.open("imagem/sistema.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[2].onclick = function() {
	window.open("imagem/mobile.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[3].onclick = function() {
	window.open("imagem/suporte.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[4].onclick = function() {
	window.open("imagem/cliente.png", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[5].onclick = function() {
	window.open("imagem/colaboradores.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[6].onclick = function() {
	window.open("imagem/ambiente.jpg", "minhaJanela", "height=350,width=500");
}
document.getElementsByClassName("foto")[7].onclick = function() {
	window.open("imagem/lider.jpg", "minhaJanela", "height=350,width=500");
}
function confirma_exclusaoCliente(id){
	if(window.confirm("Tem certeza de que deseja excluir?")){
		window.open("php/excluircli.php?excluir=" + id, "");
	}
}
function confirma_exclusaoFornecedor(id){
	if(window.confirm("Tem certeza de que deseja excluir?")){
		window.open("php/excluirfor.php?excluir=" + id, "");
	}
}
function confirma_exclusaoService(id){
	if(window.confirm("Tem certeza de que deseja excluir?")){
		window.open("php/excluirservice.php?excluir=" + id, "");
	}
}
function confirma_exclusaoProduto(id){
	if(window.confirm("Tem certeza de que deseja excluir?")){
		window.open("php/excluirprod.php?excluir=" + id, "");
	}
}
