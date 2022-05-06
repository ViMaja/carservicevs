function mensaje(id) {
    var m = window.confirm("Esta seguro que desa eliminar Registro: " + id);
    if (m == true) {
        return window.location.href = "index.php?id=" + id + "&ide=1&conta=1";

    }

}