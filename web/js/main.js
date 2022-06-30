var working = false;
$('.login').on('submit', function(e) {
    window.location.href = "?modulo=Login&controlador=Login&funcion=validar";
});

$(".contenedor").hide();
const protocol = window.location.protocol;
console.log(protocol);
const host = window.location.hostname;
console.log(host);
const port = window.location.port;
console.log(port);
var url = window.location.href;
console.log(url);
if (url === protocol + "//" + host + port + "/proyectoFormativo/web/" || url === protocol + "//" +  host + port + "/proyectoFormativo/web/index.php") {
  $(".contenedor").hide();
} else {
  $(".contenedor").show(500)
}
