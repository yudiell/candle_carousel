<?php
$page_title = "Data & Results";
$current_page = "data";
include 'includes/header.php';

// Load JSON data
$json_data = file_get_contents('data.json');
$experiment_data = json_decode($json_data, true);
$data = $experiment_data['data'];

// Calculate statistics
$highest_rpm = 0;
$lowest_rpm = PHP_INT_MAX;
$highest_candle = 0;
$lowest_candle = 0;
$percentage_increase = 0;

foreach ($data as $entry) {
    if ($entry['average'] > $highest_rpm) {
        $highest_rpm = $entry['average'];
        $highest_candle = $entry['candle'];
    }
    if ($entry['average'] < $lowest_rpm) {
        $lowest_rpm = $entry['average'];
        $lowest_candle = $entry['candle'];
    }
}

if ($data[0]['average'] > 0) {
    $percentage_increase = (($data[3]['average'] - $data[0]['average']) / $data[0]['average']) * 100;
} else {
    $percentage_increase = ($data[3]['average'] > 0) ? 'N/A (starting from 0)' : 0;
}
?>

<div class="content-section">
    <h1 class="page-title">Data & Results</h1>
    
    <h2>📊 Data</h2>
    
    <p>The following table shows the rotational speed data collected during the experiment:</p>
    
    <table>
        <thead>
            <tr>
                <th>Number of Candles</th>
                <th>Trial 1 (RPM)</th>
                <th>Trial 2 (RPM)</th>
                <th>Trial 3 (RPM)</th>
                <th>Average (RPM)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $entry): ?>
            <tr>
                <td><?php echo htmlspecialchars($entry['candle']); ?></td>
                <td><?php echo htmlspecialchars($entry['trials']['t1']); ?></td>
                <td><?php echo htmlspecialchars($entry['trials']['t2']); ?></td>
                <td><?php echo htmlspecialchars($entry['trials']['t3']); ?></td>
                <td><strong><?php echo htmlspecialchars(number_format($entry['average'], 1)); ?></strong></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <p><strong>Note:</strong> RPM = Rotations per minute</p>
    
    <h3>👁️ Additional Observations</h3>
    <ul>
        <li>Temperature of air above candles (if measured): _____°C</li>
        <li>Time for carousel to begin spinning after lighting candles: _____ seconds</li>
        <li>Weather conditions during experiment: _____</li>
        <li>Room temperature: _____°C</li>
    </ul>
    
    <h2>📈 Results</h2>
    
    <p>
        After conducting the statistical analysis of the data collected, the results show a significant 
        increase in rotation speed with more candles. The carousel did not rotate with 1 candle, but 
        showed increasing rotation speeds as more candles were added.
    </p>
    
    <p>
        The carousel achieved the highest rotation speed with <?php echo $highest_candle; ?> candles, averaging 
        <?php echo number_format($highest_rpm, 1); ?> RPM. The lowest speed occurred with <?php echo $lowest_candle; ?> 
        candle(s), averaging <?php echo number_format($lowest_rpm, 1); ?> RPM.
    </p>
    
    <p>
        The data demonstrates a positive correlation between the number of candles and rotation speed. 
        The relationship appears to be non-linear, with the most significant increase occurring when going 
        from 2 to 3 candles. The percentage increase in speed from 1 candle to 4 candles was 
        <?php echo is_numeric($percentage_increase) ? number_format($percentage_increase, 1) . '%' : $percentage_increase; ?>.
    </p>
    
    <h3>🔍 Key Findings</h3>
    <ul>
        <li>The relationship between number of candles and rotation speed appears to be <strong>non-linear</strong>, with accelerating increases as more candles are added</li>
        <li>The most significant increase occurred when going from <strong>2 to 3 candles</strong> (from 7.3 to 15.3 RPM, a 109.6% increase)</li>
        <li>Data consistency across trials: <strong>Moderate variation</strong> observed, particularly in candle 2 and 3 trials, with candle 4 showing the most consistent results</li>
        <li>One candle produced <strong>no rotation</strong> (0 RPM), indicating a minimum threshold of heat energy is required</li>
    </ul>
    
    <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); padding: 1rem; margin: 1.5rem 0; border-left: 4px solid #f59e0b; border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
        <p style="margin: 0;">
            <strong>Statistical Analysis:</strong> After completing your experiment, calculate the following:
        </p>
        <ul style="margin-top: 0.5rem;">
            <li>Average RPM for each candle configuration</li>
            <li>Range of values (highest - lowest) for each configuration</li>
            <li>Percentage change between configurations</li>
            <li>Any patterns or anomalies in the data</li>
        </ul>
    </div>
    
    <div class="page-nav">
        <a href="procedures.php" class="btn btn-secondary">← Previous: Procedures</a>
        <a href="graph.php" class="btn">Next: Graph →</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

