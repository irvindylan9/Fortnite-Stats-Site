<?php
    include 'functions.php';

    // PAY ATTENTION TO THIS TO CHANGE TO PSN AND PC FOR AMY/IAN/KYLE/XANDRA
    // AMY: 'psn' 'she_a_scorpio'
    // IAN: 'psn' 'lol__aimers'
    // XANDRA: 'psn' 'XandraTimelord
    // KYLE: 'pc' 'Kyle21Irvin'
$platform = 'xbl';
$epicNickname ='chief_kweefa';

$playerStats = getPlayerStats ($platform, $epicNickname);

// echo '<pre>';
// print_r( $playerStats );
// die();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Squad Fortnite Stats!!</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <style>
            @font-face {
                font-family: 'Fortnite';
                src: url( 'BurbankBigCondensed-Bold.otf' );
            }

            body {
                font-family: 'Fortnite';
                background: #1e1e1e;
                color: #fff;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div style="margin-bottom:20px;font-size:48px";>
            <div>FORTNITE PLAYER STATS</div>
                <div style="font-size:28px;">
                Player <?php echo $epicNickname; ?> on <?php echo $platform; ?>
                </div>
            </div>
            <div style="width:100%;color:#000;background:#f1ed62;font-size:26px;display:inline-block">
            <div style="float:left">LIFETIME</div>
            </div>
            </div>

            <ul style="list-style: none; padding:0px; margin: 0px; margin-bottom: 20px;">
                <?php foreach ( $playerStats['lifetimeStats'] as $stat ) : ?>
                    <li style="display:inline-block;border:1px solid #363636; padding:10px; margin-left:10px">
                    <div>
                        <div style="color:#9a9a9a;font-size:16px;">
                            <?php echo $stat['value']; ?>
                        </div>
                    </div>
                    </li>
                    <?php endforeach; ?>
            </ul>





    </body>
</html>
