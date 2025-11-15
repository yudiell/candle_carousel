<?php
$page_title = isset($page_title) ? $page_title : "How Candle Carousels Convert Heat Energy into Motion";
$current_page = isset($current_page) ? $current_page : "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?> - Candle Carousel Science Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="site-title">How Candle Carousels Convert Heat Energy into Motion</h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" <?php echo $current_page == 'home' ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="purpose.php" <?php echo $current_page == 'purpose' ? 'class="active"' : ''; ?>>Purpose</a></li>
                    <li><a href="background.php" <?php echo $current_page == 'background' ? 'class="active"' : ''; ?>>Background</a></li>
                    <li><a href="question_hypothesis.php" <?php echo $current_page == 'question' ? 'class="active"' : ''; ?>>Question & Hypothesis</a></li>
                    <li><a href="variables_materials.php" <?php echo $current_page == 'variables' ? 'class="active"' : ''; ?>>Variables & Materials</a></li>
                    <li><a href="procedures.php" <?php echo $current_page == 'procedures' ? 'class="active"' : ''; ?>>Procedures</a></li>
                    <li><a href="data_results.php" <?php echo $current_page == 'data' ? 'class="active"' : ''; ?>>Data & Results</a></li>
                    <li><a href="graph.php" <?php echo $current_page == 'graph' ? 'class="active"' : ''; ?>>Graph</a></li>
                    <li><a href="conclusion.php" <?php echo $current_page == 'conclusion' ? 'class="active"' : ''; ?>>Conclusion</a></li>
                    <li><a href="future_bibliography.php" <?php echo $current_page == 'future' ? 'class="active"' : ''; ?>>Future Research</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">

