<?php
$page_title = "Graph";
$current_page = "graph";
include 'includes/header.php';
?>

<div class="content-section">
    <h1 class="page-title">Graph</h1>
    
    <p>
        The graph below visually represents the relationship between the number of candles and the rotational 
        speed of the carousel.
    </p>
    
    <div class="graph-container">
        <h2>Effect of Number of Candles on Carousel Rotation Speed</h2>
        
        <div class="graph-placeholder">
            <p style="font-size: 1.1rem; color: #666; margin-bottom: 1rem;">
                <strong>Graph Placeholder</strong>
            </p>
            <p style="color: #999;">
                This graph should display:
            </p>
            <ul style="text-align: left; display: inline-block; color: #666;">
                <li><strong>X-axis:</strong> Number of Candles (1, 2, 3, 4)</li>
                <li><strong>Y-axis:</strong> Average Rotations per Minute (RPM)</li>
                <li><strong>Title:</strong> "Effect of Number of Candles on Carousel Rotation Speed"</li>
                <li>Data points connected with a line or displayed as bars</li>
            </ul>
            <p style="margin-top: 1rem; color: #999;">
                Once experimental data is collected, create a line graph or bar chart showing the average 
                RPM for each candle configuration. The graph should clearly illustrate the relationship 
                between the independent variable (number of candles) and the dependent variable (rotation speed).
            </p>
        </div>
        
        <div style="margin-top: 2rem; padding: 1rem; background-color: #f5f5f5; border-radius: 4px;">
            <h3>Graph Interpretation Guide</h3>
            <p>When analyzing your graph, look for:</p>
            <ul style="text-align: left; display: inline-block;">
                <li><strong>Trend:</strong> Does the line/bar go up, down, or stay level?</li>
                <li><strong>Pattern:</strong> Is the relationship linear, exponential, or something else?</li>
                <li><strong>Consistency:</strong> Are the increases consistent or do they vary?</li>
                <li><strong>Outliers:</strong> Are there any data points that don't fit the pattern?</li>
            </ul>
        </div>
    </div>
    
    <h2>Creating Your Graph</h2>
    
    <p>You can create your graph using:</p>
    <ul>
        <li>Graph paper and pencil (traditional method)</li>
        <li>Spreadsheet software (Excel, Google Sheets) - recommended for accuracy</li>
        <li>Online graphing tools</li>
        <li>Scientific graphing software</li>
    </ul>
    
    <h3>Graph Requirements</h3>
    <ul>
        <li>Clear, readable labels on both axes</li>
        <li>Appropriate scale (make sure the data fills the graph space)</li>
        <li>Title that describes what the graph shows</li>
        <li>Units clearly indicated (RPM for Y-axis)</li>
        <li>Neat, professional appearance</li>
    </ul>
    
    <div class="page-nav">
        <a href="data_results.php" class="btn btn-secondary">← Previous: Data & Results</a>
        <a href="conclusion.php" class="btn">Next: Conclusion →</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

