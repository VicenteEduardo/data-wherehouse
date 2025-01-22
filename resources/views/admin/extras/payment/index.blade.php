<script>
    window.onload = function() {

        var janManufacture = JSON.parse('<?php echo $janManufacture; ?>');
        var feManufacture = JSON.parse('<?php echo $feManufacture; ?>');
        var marManufacture = JSON.parse('<?php echo   $marManufacture; ?>');
        var abrManufacture = JSON.parse('<?php echo $abrManufacture; ?>');
        var maioManufacture = JSON.parse('<?php echo $maioManufacture; ?>');
        var junManufacture = JSON.parse('<?php echo $junManufacture; ?>');
        var julManufacture = JSON.parse('<?php echo $julManufacture; ?>');
        var agoManufacture = JSON.parse('<?php echo $agoManufacture; ?>');
        var setManufacture = JSON.parse('<?php echo $setManufacture; ?>');
        var outManufacture = JSON.parse('<?php echo $outManufacture; ?>');
        var novManufacture = JSON.parse('<?php echo $novManufacture; ?>');
        var dezManufacture = JSON.parse('<?php echo $dezManufacture; ?>');

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

        var jancowork = JSON.parse('<?php echo $jancowork; ?>');
        var fecowork = JSON.parse('<?php echo $fecowork; ?>');
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
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Estatística Geral"
            },
            axisY: {
                title: "",
                suffix: ""
            },
            toolTip: {
                shared: "true"
            },
            legend: {
                cursor: "pointer",
                itemclick: toggleDataSeries
            },
            data: [{
                    type: "spline",
                    visible: false,
                    showInLegend: true,
                    yValueFormatString: "##.00KZ",
                    name: "Fábrica Software",
                    dataPoints: [{
                            label: "Janeiro",
                            y: janManufacture
                        },
                        {
                            label: "Fevereiro",
                            y: feManufacture
                        },
                        {
                            label: "Março",
                            y: marManufacture
                        },
                        {
                            label: "Abril",
                            y: abrManufacture
                        },
                        {
                            label: "Maio",
                            y: maioManufacture
                        },
                        {
                            label: "Junho",
                            y: junManufacture
                        },
                        {
                            label: "Julho",
                            y: julManufacture
                        },
                        {
                            label: "Ago",
                            y: agoManufacture
                        },
                        {
                            label: "Setembro",
                            y: setManufacture
                        },
                        {
                            label: "Outubro",
                            y: outManufacture
                        },
                        {
                            label: "Novembro",
                            y: novManufacture
                        },
                        {
                            label: "Dezembro",
                            y: dezManufacture
                        }
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    visible: false,
                    yValueFormatString: "##.00KZ",
                    name: "Reparação de Equipamentos",
                    dataPoints: [{
                            label: "Janeiro",
                            y: janEquipament
                        },
                        {
                            label: "Fevereiro",
                            y: fevEquipament
                        },
                        {
                            label: "Março",
                            y: marEquipament
                        },
                        {
                            label: "Abril",
                            y: abrEquipament
                        },
                        {
                            label: "Maio",
                            y: maioEquipament
                        },
                        {
                            label: "Junho",
                            y: junEquipament
                        },
                        {
                            label: "Julho",
                            y: julEquipament
                        },
                        {
                            label: "Ago",
                            y: agoEquipament
                        },
                        {
                            label: "Setembro",
                            y: setEquipament
                        },
                        {
                            label: "Outubro",
                            y: outEquipament
                        },
                        {
                            label: "Novembro",
                            y: novEquipament
                        },
                        {
                            label: "Dezembro",
                            y: dezEquipament
                        }
                    ]
                },
                {
                    type: "spline",
                    visible: false,
                    showInLegend: true,
                    yValueFormatString: "##.00kz",
                    name: "Startup",
                    dataPoints: [{
                            label: "Janeiro",
                            y: janStartups
                        },
                        {
                            label: "Fevereiro",
                            y: fevStartups
                        },
                        {
                            label: "Março",
                            y: marStartups
                        },
                        {
                            label: "Abril",
                            y: abrStartups
                        },
                        {
                            label: "Maio",
                            y: maioStartups
                        },
                        {
                            label: "Junho",
                            y: junStartups
                        },
                        {
                            label: "Julho",
                            y: julStartups
                        },
                        {
                            label: "Ago",
                            y: agoStartups
                        },
                        {
                            label: "Setembro",
                            y: setStartups
                        },
                        {
                            label: "Outubro",
                            y: outStartups
                        },
                        {
                            label: "Novembro",
                            y: novStartups
                        }, {
                            label: "Dezembro",
                            y: dezStartups
                        }
                    ]
                },
                {
                    type: "spline",
                    visible: false,
                    showInLegend: true,
                    yValueFormatString: "##.00KZ",
                    name: "Cowork",
                    dataPoints: [{
                            label: "Janeiro",
                            y: jancowork
                        },
                        {
                            label: "Fevereiro",
                            y: fecowork
                        },
                        {
                            label: "Março",
                            y: marcowork
                        },
                        {
                            label: "Abril",
                            y: abrcowork
                        },
                        {
                            label: "Maio",
                            y: maiocowork
                        },
                        {
                            label: "Junho",
                            y: juncowork
                        },
                        {
                            label: "Julho",
                            y: julcowork
                        },
                        {
                            label: "Ago",
                            y: agocowork
                        },
                        {
                            label: "Setembro",
                            y: setcowork
                        },
                        {
                            label: "Outubro",
                            y: outcowork
                        },
                        {
                            label: "Novembro",
                            y: novcowork
                        }, {
                            label: "Dezembro",
                            y: dezcowork
                        }
                    ]
                },
                {
                    type: "spline",
                    showInLegend: true,
                    yValueFormatString: "##.00KZ",
                    name: "Auditório",
                    dataPoints: [{
                            label: "Janeiro",
                            y: janAuditoriums
                        },
                        {
                            label: "Fevereiro",
                            y: feAuditoriums
                        },
                        {
                            label: "Março",
                            y: marAuditoriums
                        },
                        {
                            label: "Abril",
                            y: abrAuditoriums
                        },
                        {
                            label: "Maio",
                            y: maioAuditoriums
                        },
                        {
                            label: "Junho",
                            y: junAuditoriums
                        },
                        {
                            label: "Julho",
                            y: julAuditoriums
                        },
                        {
                            label: "Ago",
                            y:agoAuditoriums
                        },
                        {
                            label: "Setembro",
                            y:  setAuditoriums
                        },
                        {
                            label: "Outubro",
                            y: outAuditoriums
                        },
                        {
                            label: "Novembro",
                            y:novAuditoriums
                        },  {
                            label: "Dezembro",
                            y: dezAuditoriums
                        }

                    ]
                },



            ]
        });
        chart.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }

    }
</script>
