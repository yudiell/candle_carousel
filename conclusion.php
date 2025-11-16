<?php
$page_title = "Conclusion";
$current_page = "conclusion";
include 'includes/header.php';

// Load JSON data
$json_data = file_get_contents('data.json');
$experiment_data = json_decode($json_data, true);
$data = $experiment_data['data'];

// Calculate statistics
$one_candle_avg = $data[0]['average'];
$two_candle_avg = $data[1]['average'];
$three_candle_avg = $data[2]['average'];
$four_candle_avg = $data[3]['average'];

// Calculate percentage increases
$two_to_three_increase = (($three_candle_avg - $two_candle_avg) / $two_candle_avg) * 100;
$three_to_four_increase = (($four_candle_avg - $three_candle_avg) / $three_candle_avg) * 100;

// Calculate standard deviations
function calculate_std_dev($trials, $average) {
    $variance = 0;
    foreach ($trials as $trial) {
        $variance += pow($trial - $average, 2);
    }
    return sqrt($variance / count($trials));
}

$std_dev_2 = calculate_std_dev([$data[1]['trials']['t1'], $data[1]['trials']['t2'], $data[1]['trials']['t3']], $two_candle_avg);
$std_dev_3 = calculate_std_dev([$data[2]['trials']['t1'], $data[2]['trials']['t2'], $data[2]['trials']['t3']], $three_candle_avg);
$std_dev_4 = calculate_std_dev([$data[3]['trials']['t1'], $data[3]['trials']['t2'], $data[3]['trials']['t3']], $four_candle_avg);

// Calculate ranges
$range_2 = max($data[1]['trials']['t1'], $data[1]['trials']['t2'], $data[1]['trials']['t3']) - min($data[1]['trials']['t1'], $data[1]['trials']['t2'], $data[1]['trials']['t3']);
$range_3 = max($data[2]['trials']['t1'], $data[2]['trials']['t2'], $data[2]['trials']['t3']) - min($data[2]['trials']['t1'], $data[2]['trials']['t2'], $data[2]['trials']['t3']);
$range_4 = max($data[3]['trials']['t1'], $data[3]['trials']['t2'], $data[3]['trials']['t3']) - min($data[3]['trials']['t1'], $data[3]['trials']['t2'], $data[3]['trials']['t3']);
?>

<div class="content-section">
    <h1 class="page-title">Conclusion</h1>
    
    <h2>1️⃣ Answer to the Research Question</h2>
    
    <p>
        The number of candles significantly affects the rotational speed of a candle carousel. Based on the 
        experimental data, the carousel rotates <strong>faster</strong> as more candles are added. With 1 candle, 
        the carousel did not rotate at all (0 RPM), but as more candles were added, the rotation speed increased 
        substantially, reaching an average of <?php echo number_format($four_candle_avg, 1); ?> RPM with 4 candles.
    </p>
    
    <p>
        The research question "How does the number of candles affect the rotational speed of a candle carousel?" 
        can be answered by stating that there is a <strong>strong positive relationship</strong> between the number 
        of candles and rotational speed. The carousel requires a minimum threshold of heat energy (more than 1 candle) 
        to begin rotating, and beyond that threshold, each additional candle produces a measurable increase in rotation 
        speed, with the relationship appearing to be non-linear.
    </p>
    
    <h2>2️⃣ Supporting Evidence</h2>
    
    <p>
        The data table shows that with 1 candle, the average speed was <?php echo number_format($one_candle_avg, 1); ?> RPM 
        (no rotation), while with 4 candles, the average speed increased to <?php echo number_format($four_candle_avg, 1); ?> RPM. 
        The graph clearly illustrates a <strong>positive upward trend</strong> with an accelerating rate of increase. 
        The most dramatic increase occurred between 2 and 3 candles, where the speed more than doubled from 
        <?php echo number_format($two_candle_avg, 1); ?> RPM to <?php echo number_format($three_candle_avg, 1); ?> RPM 
        (a <?php echo number_format($two_to_three_increase, 1); ?>% increase).
    </p>
    
    <p>
        Evidence supporting this conclusion can be found:
    </p>
    <ul>
        <li>In the data table on the Data & Results page, showing consistent increases across trials: 0 RPM (1 candle), 
            <?php echo number_format($two_candle_avg, 1); ?> RPM (2 candles), <?php echo number_format($three_candle_avg, 1); ?> RPM 
            (3 candles), and <?php echo number_format($four_candle_avg, 1); ?> RPM (4 candles)</li>
        <li>In the graph on the Graph page, which visually demonstrates a clear positive correlation with an accelerating trend</li>
        <li>In the statistical analysis showing increasing consistency as more candles are added (standard deviation decreases from 
            <?php echo number_format($std_dev_2, 1); ?> for 2 candles to <?php echo number_format($std_dev_4, 1); ?> for 4 candles)</li>
    </ul>
    
    <h2>3️⃣ Statistical Analysis</h2>
    
    <p>
        The standard deviation across trials varied by candle configuration, with the most consistent results occurring 
        with 4 candles (standard deviation of <?php echo number_format($std_dev_4, 1); ?> RPM). The data shows that as more 
        candles were added, the results became more consistent, suggesting that the effect becomes more reliable with 
        greater heat energy. The relationship between number of candles and rotation speed shows a strong positive 
        correlation, with the trend appearing non-linear rather than linear.
    </p>
    
    <p>
        Key statistical findings:
    </p>
    <ul>
        <li><strong>Range of variation:</strong> The range of values within each configuration decreased as more candles were added: 
            <?php echo number_format($range_2, 1); ?> RPM for 2 candles, <?php echo number_format($range_3, 1); ?> RPM for 3 candles, 
            and <?php echo number_format($range_4, 1); ?> RPM for 4 candles, indicating greater consistency with more heat sources</li>
        <li><strong>Data consistency:</strong> Standard deviations were <?php echo number_format($std_dev_2, 1); ?> RPM (2 candles), 
            <?php echo number_format($std_dev_3, 1); ?> RPM (3 candles), and <?php echo number_format($std_dev_4, 1); ?> RPM (4 candles), 
            showing improved consistency with more candles</li>
        <li><strong>Correlation strength:</strong> The data demonstrates a strong positive correlation, with each additional candle 
            producing measurable increases in rotation speed. The relationship is non-linear, with the largest percentage increase 
            (<?php echo number_format($two_to_three_increase, 1); ?>%) occurring between 2 and 3 candles</li>
        <li><strong>Any outliers or anomalies:</strong> The first trial with 2 candles resulted in 0 RPM, which may indicate 
            experimental variability or the need for a minimum heat threshold. However, trials 2 and 3 with 2 candles produced 
            measurable rotation (9 and 13 RPM), confirming that 2 candles can produce rotation</li>
    </ul>
    
    <h2>4️⃣ Scientific Explanation</h2>
    
    <p>
        This data supports the hypothesis because more candles produce more thermal energy, which heats a larger 
        volume of air. The increased heat creates stronger convection currents with greater upward velocity. When 
        this faster-moving warm air strikes the angled blades, it exerts a greater force, resulting in increased 
        rotational speed.
    </p>
    
    <h3>🌍 Real-World Applications</h3>
    
    <p>
        This principle applies to other real-world phenomena:
    </p>
    
    <ul>
        <li>
            <strong>🌬️ Wind Turbines:</strong> Like the carousel, wind turbines convert air movement into rotational 
            motion, though they use natural wind rather than convection currents. The same principle of angled blades 
            converting air flow into rotation applies.
        </li>
        <li>
            <strong>🎈 Hot Air Balloons:</strong> Rising hot air provides lift, similar to how it provides force to 
            spin the carousel. Both rely on the principle that hot air is less dense and rises.
        </li>
        <li>
            <strong>🔥 Convection Ovens:</strong> Hot air circulation distributes heat evenly, using the same principle 
            of hot air rising and cold air sinking. The convection currents ensure even cooking.
        </li>
        <li>
            <strong>🌤️ Weather Systems:</strong> Large-scale convection currents drive weather patterns as warm air rises 
            and cold air sinks. Understanding convection helps meteorologists predict weather patterns.
        </li>
    </ul>
    
    <h2>5️⃣ Hypothesis Evaluation</h2>
    
    <div style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); padding: 1.5rem; border-left: 4px solid #14b8a6; margin: 1.5rem 0; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <p style="margin: 0;">
            <strong>✅ Hypothesis Supported:</strong> The hypothesis was <strong>supported</strong> by the experimental data. 
            As predicted, increasing the number of candles did result in faster rotation speeds due to stronger 
            convection currents. The data clearly shows a positive relationship: from 0 RPM with 1 candle to 
            <?php echo number_format($four_candle_avg, 1); ?> RPM with 4 candles. Each additional candle beyond the 
            minimum threshold (2 candles) produced measurable increases in rotation speed, confirming that more 
            candles produce more thermal energy, which creates stronger convection currents that exert greater force 
            on the carousel blades.
        </p>
    </div>
    
    <h3>💡 Key Learnings from This Project</h3>
    
    <ul>
        <li>⚡ Heat energy can be converted into mechanical motion through convection</li>
        <li>📐 The angle of the blades is critical for converting upward air movement into rotational motion</li>
        <li>🔥 More heat sources create stronger convection currents</li>
        <li>🔄 This demonstrates the principle of energy transformation (thermal to kinetic energy)</li>
        <li>🔬 Controlling variables is essential for valid scientific experimentation</li>
        <li>📊 Multiple trials help ensure reliable and reproducible results</li>
    </ul>
    
    <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); padding: 1.5rem; margin: 2rem 0; border-radius: 16px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); border: 1px solid #e2e8f0;">
        <h3>📝 Summary</h3>
        <p>
            This experiment successfully demonstrated how thermal energy from candles can be converted into 
            mechanical motion through convection. The results show a clear <strong>positive relationship</strong> between 
            the number of heat sources (candles) and the resulting motion (rotation speed), with speeds increasing from 
            0 RPM with 1 candle to <?php echo number_format($four_candle_avg, 1); ?> RPM with 4 candles. The relationship 
            is non-linear, with the most dramatic increase occurring between 2 and 3 candles (a 
            <?php echo number_format($two_to_three_increase, 1); ?>% increase). The data confirms that a minimum threshold 
            of heat energy is required to initiate rotation, and beyond that threshold, each additional candle produces 
            stronger convection currents that result in faster rotation. This illustrates fundamental physics principles 
            of energy transformation (thermal to kinetic) that apply to many real-world technologies and natural phenomena.
        </p>
    </div>
    
    <div class="page-nav">
        <a href="graph.php" class="btn btn-secondary">← Previous: Graph</a>
        <a href="future_bibliography.php" class="btn">Next: Future Research & Bibliography →</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

