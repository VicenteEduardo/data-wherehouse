
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var janStartups = JSON.parse('<?php echo $janStartups; ?>');
        var fevStartups = JSON.parse('<?php echo $fevStartups; ?>');
        var marStartups = JSON.parse('<?php echo $marStartups; ?>');
        var abrStartups = JSON.parse('<?php echo $abrStartups; ?>');
        var maioStartups = JSON.parse('<?php echo $maioStartups; ?>');
        var junStartups = JSON.parse('<?php echo $junStartups; ?>');
        var julStartups = JSON.parse('<?php echo $julStartups; ?>');
        var agoStartups = JSON.parse('<?php echo $agoStartups; ?>');
        var setStartups = JSON.parse('<?php echo $setStartups; ?>');
        var outStartups = JSON.parse('<?php echo $outStartups; ?>');
        var novStartups = JSON.parse('<?php echo $novStartups; ?>');
        var dezStartups = JSON.parse('<?php echo $dezStartups; ?>');
        const startups = document.getElementById('startups').getContext('2d');
        const myChart = new Chart(startups, {
            type: 'bar',
            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Total Parcial',
                    data: [janStartups, fevStartups, marStartups, abrStartups, maioStartups, junStartups, julStartups, agoStartups, setStartups, outStartups, novStartups, dezStartups],
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
