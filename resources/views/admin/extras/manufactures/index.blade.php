<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var janManufacture = JSON.parse('<?php echo $janManufacture; ?>');
    var feManufacture = JSON.parse('<?php echo $feManufacture; ?>');
    var marManufacture = JSON.parse('<?php echo $marManufacture; ?>');
    var abrManufacture = JSON.parse('<?php echo $abrManufacture; ?>');
    var maioManufacture = JSON.parse('<?php echo $maioManufacture; ?>');
    var junManufacture = JSON.parse('<?php echo $junManufacture; ?>');
    var julManufacture = JSON.parse('<?php echo $julManufacture; ?>');
    var agoManufacture = JSON.parse('<?php echo $agoManufacture; ?>');
    var setManufacture = JSON.parse('<?php echo $setManufacture; ?>');
    var outManufacture = JSON.parse('<?php echo $outManufacture; ?>');
    var novManufacture = JSON.parse('<?php echo $novManufacture; ?>');
    var dezManufacture = JSON.parse('<?php echo $dezManufacture; ?>');
    const labels = [
        'Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
        'Outubro', 'Novembro', 'Dezembro'
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Total Parcial',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [janManufacture, feManufacture, marManufacture, abrManufacture, maioManufacture,
                junManufacture, julManufacture, agoManufacture, setManufacture, outManufacture,
                novManufacture, dezManufacture
            ],
        }]
    };


    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>
<script>
    const manufactures = new Chart(
        document.getElementById('manufactures'),
        config
    );
</script>
