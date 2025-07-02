


const scatterData2 = {
    datasets: [{
    label: 'Prezzo Noleggio',
    data: [
    {foreach from=$rentTotalPerDay key=date item=rent}
        {
        x: "{$date}",
        y: {$rent}
        },
    {/foreach}
    ],
    backgroundColor: 'rgba(255, 99, 132, 0.7)'
    }]
};

const scatterConfig2 = {
    type: 'line',
    data: scatterData2,
    options: {
    responsive: true,
    plugins: {
        legend: { position: 'top' },
        title: {
        display: true,
        text: 'Prezzi dei noleggi nel tempo'
        }
    },
    scales: {
        x: {
        type: 'time',
        time: {
            unit: 'day',
            tooltipFormat: 'YYYY-MM-DD',
            displayFormats: { day: 'YYYY-MM-DD' }
        },
        title: {
            display: true,
            text: 'Data'
        }
        },
        y: {
        title: {
            display: true,
            text: 'Prezzo (€)'
        }
        }
    }
    }
};

new Chart(
    document.getElementById('rentScatterChart').getContext('2d'),
    scatterConfig2
);

