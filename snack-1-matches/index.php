<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 1 | Matches</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="app">
        <header>
            <div class="header-ctn">
                <img src="assets/img/nba-logo.svg" alt="">
                <h1>Scores</h1>
            </div>
        </header>

        <main>
            <div class="main-ctn">
                <section class="title">
                    <h3>Game <?php echo rand(1, 82) ?></h3>
                </section>

                <section class="matches">
                    <?php
                    // Setup Array Matches
                    $matches = [
                        [
                            'home' => 'Los Angeles Lakers',
                            'away' => 'New York Knicks',
                            'pt_home' => rand(70, 133),
                            'pt_away' => rand(70, 133),
                        ],
                        [
                            'home' => 'Chicago Bulls',
                            'away' => 'LA Clippers',
                            'pt_home' => rand(70, 133),
                            'pt_away' => rand(70, 133),
                        ],
                        [
                            'home' => 'Brooklyn Nets',
                            'away' => 'Houston Rockets',
                            'pt_home' => rand(70, 133),
                            'pt_away' => rand(70, 133),
                        ],
                        [
                            'home' => 'Toronto Raptors',
                            'away' => 'Golden State Warriors',
                            'pt_home' => rand(70, 133),
                            'pt_away' => rand(70, 133),
                        ],
                    ];

                    ?>

                    
                        <?php // Print Matches
                        for ($i = 0; $i < count($matches); $i++) { ?>
                            <div class="match-ctn">
                                <div class="team">
                                    <h4><?php echo $matches[$i]['home']; ?></h4>
                                    <h4><?php echo $matches[$i]['away']; ?></h4>
                                </div>
                                <div class="result">
                                    <h3><?php echo $matches[$i]['pt_home']; ?></h3>
                                    <h3><?php echo $matches[$i]['pt_away']; ?></h3>
                                </div>
                            </div>
                       <?php } ?>
                    


                </section>
            </div>
            
        </main>
    </div>
    

</body>
</html>