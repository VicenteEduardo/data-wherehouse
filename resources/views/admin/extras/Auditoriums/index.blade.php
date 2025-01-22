
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var janAuditoriums = JSON.parse('<?php echo $janAuditoriums; ?>');

        var feAuditoriums = JSON.parse('<?php echo $feAuditoriums; ?>');
        var marAuditoriums = JSON.parse('<?php echo $marAuditoriums; ?>');
        var abrAuditoriums = JSON.parse('<?php echo $abrAuditoriums; ?>');
        var maioAuditoriums = JSON.parse('<?php echo $maioAuditoriums; ?>');
        var junAuditoriums = JSON.parse('<?php echo $junAuditoriums; ?>');
        var julAuditoriums = JSON.parse('<?php echo $julAuditoriums; ?>');
        var agoAuditoriums = JSON.parse('<?php echo $agoAuditoriums; ?>');
        var setAuditoriums = JSON.parse('<?php echo $setAuditoriums; ?>');
        var outAuditoriums = JSON.parse('<?php echo $outAuditoriums; ?>');
        var novAuditoriums = JSON.parse('<?php echo $novAuditoriums; ?>');
        var dezAuditoriums = JSON.parse('<?php echo $dezAuditoriums; ?>');
        const Auditoriums = document.getElementById('Auditoriums').getContext('2d');
        const myChart = new Chart(Auditoriums, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Total Parcial',
                    data: [janAuditoriums,feAuditoriums, marAuditoriums, abrAuditoriums, maioAuditoriums, junAuditoriums, julAuditoriums, agoAuditoriums, setAuditoriums, outAuditoriums, novAuditoriums, dezAuditoriums],
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
