<?php
$page_title = "Graph";
$current_page = "graph";
include 'includes/header.php';

// Load JSON data
$json_data = file_get_contents('data.json');
$experiment_data = json_decode($json_data, true);
$data = $experiment_data['data'];

// Prepare data for JavaScript
$candle_numbers = array_column($data, 'candle');
$averages = array_column($data, 'average');
$json_for_js = json_encode([
    'labels' => $candle_numbers,
    'averages' => $averages
]);
?>

<div class="content-section">
    <h1 class="page-title">Graph</h1>
    
    <p>
        The graph below visually represents the relationship between the number of candles and the rotational 
        speed of the carousel.
    </p>
    
    <div class="graph-container">
        <h2>📈 Effect of Number of Candles on Carousel Rotation Speed</h2>
        
        <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin: 2rem 0;">
            <canvas id="rpmChart" style="max-height: 400px;"></canvas>
        </div>
        
        <div style="margin-top: 2rem; padding: 1.5rem; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); border: 1px solid #e2e8f0;">
            <h3>🔍 Graph Interpretation Guide</h3>
            <p>When analyzing your graph, look for:</p>
            <ul style="text-align: left; display: inline-block;">
                <li><strong>Trend:</strong> Does the line/bar go up, down, or stay level?</li>
                <li><strong>Pattern:</strong> Is the relationship linear, exponential, or something else?</li>
                <li><strong>Consistency:</strong> Are the increases consistent or do they vary?</li>
                <li><strong>Outliers:</strong> Are there any data points that don't fit the pattern?</li>
            </ul>
        </div>
    </div>
    
    <div class="page-nav">
        <a href="data_results.php" class="btn btn-secondary">← Previous: Data & Results</a>
        <a href="conclusion.php" class="btn">Next: Conclusion →</a>
    </div>
</div>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<script>
// Get data from PHP
const chartData = <?php echo $json_for_js; ?>;

// Create the chart
const ctx = document.getElementById('rpmChart').getContext('2d');
const rpmChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: chartData.labels.map(c => c + ' Candle' + (c > 1 ? 's' : '')),
        datasets: [{
            label: 'Average RPM',
            data: chartData.averages,
            borderColor: '#dc2626',
            backgroundColor: 'rgba(220, 38, 38, 0.1)',
            borderWidth: 3,
            pointBackgroundColor: '#dc2626',
            pointBorderColor: '#ffffff',
            pointBorderWidth: 2,
            pointRadius: 6,
            pointHoverRadius: 8,
            tension: 0.3,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            title: {
                display: true,
                text: 'Effect of Number of Candles on Carousel Rotation Speed',
                font: {
                    size: 18,
                    weight: 'bold'
                },
                padding: 20
            },
            legend: {
                display: true,
                position: 'top',
                labels: {
                    font: {
                        size: 14
                    },
                    padding: 15
                }
            },
            tooltip: {
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                padding: 12,
                titleFont: {
                    size: 14
                },
                bodyFont: {
                    size: 13
                },
                callbacks: {
                    label: function(context) {
                        return 'Average RPM: ' + context.parsed.y.toFixed(1);
                    }
                }
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Number of Candles',
                    font: {
                        size: 14,
                        weight: 'bold'
                    },
                    padding: 10
                },
                ticks: {
                    font: {
                        size: 12
                    }
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Average Rotations per Minute (RPM)',
                    font: {
                        size: 14,
                        weight: 'bold'
                    },
                    padding: 10
                },
                beginAtZero: true,
                ticks: {
                    font: {
                        size: 12
                    },
                    stepSize: 5
                },
                grid: {
                    color: 'rgba(0, 0, 0, 0.05)'
                }
            }
        }
    }
});
</script>

<?php include 'includes/footer.php'; ?>

