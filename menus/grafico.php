<canvas id="resumen-gra" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("resumen-gra");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Enero", "Febero", "Marzo", "Abril", "Mayo", "Junio"],
        datasets: [{
            label: 'Resumen HB',
            data: [312053.59, 301441.44, 484422.75, 291021.51, 375720.50, 0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'         ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 3
        }]
    },
});
</script>
