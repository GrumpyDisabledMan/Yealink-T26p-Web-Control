<?php
    session_start();
    $ip = "0.0.0.0"; // Enter the IP Address of the Phone here
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <title>House Dashboard</title>
    </head>
    <body>

        <div class="container">
            <?php
                if(isset($_GET['dialNumber']))
                {
                    $find = array(" ","(",")","+44","{","}","tel:"); // You can add to this array to strip out any text when pasting from other systems
                    $numberGET = $_GET['dialNumber'];
                    $number = str_ireplace($find,"",$numberGET);
                    if(substr("$number", 0, 1) !== "0")
                    {
                        $number = "0".$number;
                    }
                }
                else
                {
                    $number = "";
                }

            ?>
            <form action="index.php" method="get">
                <p><input type="text" value="<?php echo $number; ?>" name="dialNumber" /><input type="submit" value="Prepare Number" /></p>
            </form>
            
            <?php
                echo "<div class=\"three\">";
                    echo "<a href=\"http://$ip/servlet?key=number=$number&outgoing_uri=\" target=\"iframe_a\">Dial Account One</a>"; // Enter SIP Username after uri=
                    echo "<a href=\"http://$ip/servlet?key=number=$number&outgoing_uri=\" target=\"iframe_a\">Dial Account Two</a>"; // Enter Second SIP Username after uri=
                    echo "<a href=\"http://$ip/servlet?key=number=$number&outgoing_uri=\" target=\"iframe_a\">Dial Account Three</a>"; // Enter Second SIP Username after uri=
                echo "</div>";
                echo "<div class=\"four\">";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=VOLUME_UP\" target=\"iframe_a\">Volume Up</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=VOLUME_DOWN\" target=\"iframe_a\">Volume Down</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=MUTE\" target=\"iframe_a\">Mute</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=SPEAKER\" target=\"iframe_a\">Speaker</a>";
                echo "</div>";
                echo "<div class=\"two\">";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=CANCEL\" target=\"iframe_a\">Cancel</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=OK\" target=\"iframe_a\">Ok</a>";
                echo "</div>";
                echo "<div class=\"four\">";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=F1\" target=\"iframe_a\">F1</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=F2\" target=\"iframe_a\">F2</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=F3\" target=\"iframe_a\">F3</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=F4\" target=\"iframe_a\">F4</a>";
                echo "</div>";
                echo "<div class=\"four\">";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=UP\" target=\"iframe_a\">Up</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=DOWN\" target=\"iframe_a\">Down</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=LEFT\" target=\"iframe_a\">Left</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=RIGHT\" target=\"iframe_a\">Right</a>";
                echo "</div>";
                echo "<div class=\"three\">";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=1\" target=\"iframe_a\">1</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=2\" target=\"iframe_a\">2</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=3\" target=\"iframe_a\">3</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=4\" target=\"iframe_a\">4</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=5\" target=\"iframe_a\">5</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=6\" target=\"iframe_a\">6</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=7\" target=\"iframe_a\">7</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=8\" target=\"iframe_a\">8</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=9\" target=\"iframe_a\">9</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=*\" target=\"iframe_a\">*</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=0\" target=\"iframe_a\">0</a>";
                    echo "<a href=\"http://$ip/cgi-bin/cgiServer.exx?key=POUND\" target=\"iframe_a\">#</a>";
                echo "</div>";
                // I've put examples of the four layouts you can use for displaying autodial numbers
                echo "<div class=\"one\">";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Home</a>";
                echo "</div>";
                echo "<div class=\"two\">";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Home</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Office</a>";
                echo "</div>";
                echo "<div class=\"three\">";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Home</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Office</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Supplier</a>";
                echo "</div>";
                echo "<div class=\"four\">";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Home</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Office</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Supplier</a>";
                    echo "<a href=\"http://$ip/servlet?key=number=01234567890&outgoing_uri=username@sipaccount.com\" target=\"iframe_a\">Tech Support</a>";
                echo "</div>";
            ?>
            </div>
            <iframe style="width: 0px; height: 0px; visibility: hidden;" src="iframe.html" name="iframe_a"></iframe>
        </div>
    </body>
</html>