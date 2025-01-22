<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var janEquipament = JSON.parse('<?php echo $janEquipament; ?>');
    var fevEquipament = JSON.parse('<?php echo $fevEquipament; ?>');
    var marEquipament = JSON.parse('<?php echo $marEquipament; ?>');
    var abrEquipament = JSON.parse('<?php echo $abrEquipament; ?>');
    var maioEquipament = JSON.parse('<?php echo $maioEquipament; ?>');
    var junEquipament = JSON.parse('<?php echo $junEquipament; ?>');
    var julEquipament = JSON.parse('<?php echo $julEquipament; ?>');
    var agoEquipament = JSON.parse('<?php echo $agoEquipament; ?>');
    var setEquipament = JSON.parse('<?php echo $setEquipament; ?>');
    var outEquipament = JSON.parse('<?php echo $outEquipament; ?>');
    var novEquipament = JSON.parse('<?php echo $novEquipament; ?>');
    var dezEquipament = JSON.parse('<?php echo $dezEquipament; ?>');
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
            data: [janEquipament, fevEquipament, marEquipament, abrEquipament, maioEquipament,
                junEquipament, julEquipament, agoEquipament, setEquipament, outEquipament,
                novEquipament, dezEquipament
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
    const equipaments = new Chart(
        document.getElementById('equipaments'),
        config
    );
</script>
