<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script>
    var jancowork = JSON.parse('<?php echo $jancowork; ?>');
    var  fecowork  = JSON.parse('<?php echo $fecowork ; ?>');
    var marcowork = JSON.parse('<?php echo $marcowork; ?>');
    var abrcowork = JSON.parse('<?php echo $abrcowork; ?>');
    var maiocowork = JSON.parse('<?php echo $maiocowork; ?>');
    var juncowork = JSON.parse('<?php echo $juncowork; ?>');
    var julcowork = JSON.parse('<?php echo $julcowork; ?>');
    var agocowork = JSON.parse('<?php echo $agocowork; ?>');
    var setcowork = JSON.parse('<?php echo $setcowork; ?>');
    var outcowork = JSON.parse('<?php echo $outcowork; ?>');
    var novcowork = JSON.parse('<?php echo $novcowork; ?>');
    var dezcowork = JSON.parse('<?php echo $dezcowork; ?>');
    const cowork = document.getElementById('cowork').getContext('2d');
    const myChart = new Chart(cowork, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                'Outubro', 'Novembro', 'Dezembro'
            ],
            datasets: [{
                label: 'Total Parcial',
                data: [jancowork,  fecowork , marcowork, abrcowork, maiocowork, juncowork, julcowork,
                    agocowork, setcowork, outcowork, novcowork, dezcowork
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(254, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(254, 159, 64, 0.2)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
