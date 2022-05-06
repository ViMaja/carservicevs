a = window.document.getElementById('conta').value;
b = window.document.getElementById('cid').value;
var m = "";
if (a == 0) {
    m = window.confirm("Esta seguro que desa eliminar Registro: ");
}
if (m == true) {
    window.location.href = "eliminar.php?id=" + b + "&ide=2";
} else {
    window.location.href = "index.php?page=1";
}