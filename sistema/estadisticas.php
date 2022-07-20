<?php include_once "includes/header.php"; ?>



<div id="layoutSidenav_content">
    <div class="container-fluid">
        <br>
        <input type="button" class="btn btn-outline-dark" onclick="history.back()" name="volver atrás" value="volver">
        <h1 class="mt-4">Estadisticas de las fichas </h1>

        <label for="progreso">Progreso ficha</label>
        <div class="card-body">
            <canvas id="Grafica" width="500" height="500"></canvas>

        </div>
    </div>
</div>

</div>

<script>
    let miCanvas = document.getElementById("Grafica").getContext("2d");

    var Chart = new Chart(miCanvas, {
        type: "bar",
        data: {
            labels: ["Prueba", "prueba2", "prueba3"],
            datasets: [{
                label: "grafica"
            }]
        }
    })
</script>

<?php include_once "includes/footer.php"; ?>