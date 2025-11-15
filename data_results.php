<?php
$page_title = "Data & Results";
$current_page = "data";
include 'includes/header.php';
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
            <tr>
                <td>1</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
            </tr>
            <tr>
                <td>2</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
            </tr>
            <tr>
                <td>3</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
            </tr>
            <tr>
                <td>4</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
                <td>—</td>
            </tr>
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
    
    <div style="background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); padding: 1rem; margin: 1.5rem 0; border-left: 4px solid #6366f1; border-radius: 12px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);">
        <p style="margin: 0; font-style: italic;">
            <strong>Note:</strong> This data table is a template. Fill in your actual experimental data 
            as you conduct the experiment. Calculate the average RPM for each candle configuration by 
            adding the three trial values and dividing by 3.
        </p>
    </div>
    
    <h2>📈 Results</h2>
    
    <p>
        After conducting the statistical analysis of the data collected, the results show [describe whether 
        there was a significant increase in rotation speed with more candles, or if results were different 
        than expected].
    </p>
    
    <p>
        The carousel achieved the highest rotation speed with [number] candles, averaging [number] RPM. 
        The lowest speed occurred with [number] candle(s), averaging [number] RPM.
    </p>
    
    <p>
        The data demonstrates that [describe the relationship between number of candles and rotation speed—was 
        it linear, exponential, or something else?]. The percentage increase in speed from 1 candle to 4 candles 
        was [calculate and insert percentage].
    </p>
    
    <h3>🔍 Key Findings</h3>
    <ul>
        <li>The relationship between number of candles and rotation speed appears to be [linear/exponential/other]</li>
        <li>Each additional candle increased rotation speed by approximately [X]%</li>
        <li>The most significant increase occurred when going from [X] to [Y] candles</li>
        <li>Data consistency across trials: [describe variation between trials]</li>
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

