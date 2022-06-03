<?php

?>

<!DOCTYPE HTML>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>

</style>
</head>

<body>

    <body>
        <div class="menubar">
            <div class="container">
                <div class="logo">
                    <img src="https://www.nicepng.com/png/full/368-3682793_justuno-conversion-suite-app-reviews-just-uno.png" width="100px" height="30px">
                </div>
                <ul class="menu">
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a href="#">Onboarding Service</a>
                    </li>
                    <li>
                        <a href="index#3.php">Compare</a>
                    </li>
                    <li>
                        <a href="#">Core values</a>
                    </li>
                    <li>
                        <a href="#">Q&A</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="clearfix"></div>

        <header class="header">
            <div class="container">
                <div class="header_area">
                    <h1><b>Plans & Pricing</b></h1>
                    <p>select a service plan that best suits your business needs.
                        <a href="payment.php">Start your free 14-days trial:</a> no oblication, no activation fees,
                        <br>no credit card required.
                    </p>
                </div>
            </div>
        </header>
        <!-- ////////////////////////////action : form/////////////////////////////// -->
        <section class="info1">
            <form action="payment.php" method="post">
                <div class="container">
                    <div class="info1_area">

                        <div id="containers">
                            <div class="info1_text">
                                <h1 class="head"><b>Essential</b></h1>
                                <p>Our essential plans are a self-service solution for businesses to handle website
                                    messaging and posonalization.
                                </p>
                                <br><br>
                                <p>website monthly visitors:</p>
                                <div class="pricing-calculator">
                                    <div class="pricing-input_wrap">
                                        <span>Up to</span>
                                        <input type="text" id="price" name="price" value="10,000">
                                    </div>
                                    <div class="pricing-switcher">
                                        <input type="button" onClick="calculator()" id="choice" value="annual"></input>
                                        <input type="button" onClick="calculator()" id="choice" value="monthly"></input>
                                    </div>
                                    <div class="pricing-shown">
                                        <!-- <<calculated>> -->
                                        Cost = <span id="result">$ per month</span>
                                    </div>
                                    <!-- <?php
                                            ?> -->
                                    <button type="submit" class="block" name="plan" value="essential"><b>Start a Free Trial</b></button>
                                </div>
                            </div>

                            <div>
                                <h2></h2>
                                <div class="info1_text">
                                    <h1><b>Justuno plus</b></h1>
                                    <mark><b>recommended</b></mark>
                                    <p>Our premium solution to manage the complexities of scaling audience segmentation
                                        and platform needs.
                                    </p>
                                    <br><br>
                                    <ul class="denefit">
                                        <li>Unlimited monthly visitors</li>
                                        <li>Dedicated CRO Strategist</li>
                                        <li>AI-powered product recommendation engine</li>
                                        <li>Audience Sync, connecting Google and Facebook Ads</li>
                                    </ul>
                                    Starting at<b>$199</b>
                                    <br><br>
                                    <button type="submit" class="block" name="plan">Get Start</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="info2">
            <div class="container">
                <div class="info2_area">
                    <div class="info2_text">
                        <h1 class="head" style="width: 90%; margin: 0; padding : 0;"><b>Compare Plans</b></h1>
                    </div>
                </div>
            </div>
            <table style="width:100%">
                <tr>
                    <th style="width:40% ; padding-left: 10%">
                        <h2 class="head">What's included in the plans:</h2>
                    </th>
                    <th style="width:20% ; text-align:center;">
                        <h2 class="head">Essential <br><button type="submit" class="block-fit" id="plan">Free Trial</button></h2>
                    </th>
                    <th style="width:20% ; text-align:center;">
                        <h2 class="head">Justuno Plus <br><button type="submit" class="block-fit" id="plan">Get Start</button></h2>
                    </th>
                </tr>
                <tr>
                    <td class="one"><b>Product:</b></td>
                    <td class="mid">product</td>
                    <td class="mid">product</td>
                </tr>
                <tr>
                    <td class="one">Lead capture and website messaging pop-ups</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Advanced targeting rules</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Robust Design Canvas</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Advanced audience segmentation</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Push Notifications</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">A/B Testing</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Analytics Dashboard</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Audience Sync</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Commerce AI</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="dot">
                        ---------------------------------
                    <td class="dot">
                        ---------------------------------
                </tr>
                <tr>
                    <td class="one"><b>Support:</b></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Email support and ticket submission</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Live chat access</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Phone support</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Extensive Knowledge Base</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Justuno Academy</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="dot">
                        ---------------------------------
                    <td class="dot">
                        ---------------------------------
                </tr>
                <tr>
                    <td class="one"><b>Account Services:</b></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Dedicated CRO Strategist</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Onboarding services</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Installation support</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Access to two-tier support</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
                <tr>
                    <td class="one">Ongoing strategy calls</td>
                    <td class="mid">-</td>
                    <td class="mid"><span class="glyphicon glyphicon-ok"></span></td>
                </tr>
            </table>
            <br><br><br>
        </section>

        <div class="clearfix"></div>

        <form action="report.php" method="post" id="customer_report">
            <section class="contact">
                <div class="container">
                    <div class="contact_area">
                        <h1>Contact Us</h1>
                        <form>
                            <label>Your Name</label><br>
                            <input type="text" id="customer" placeholder="Your Name"><br>
                            <label>Your Email</label><br>
                            <input type="email" id="email" placeholder="Your Email"><br>
                            <label>Your Subject</label><br>
                            <input type="text" id="subject" placeholder="Your Subject"><br>
                            <label>Your Message</label><br>
                            <textarea name="" id="mess" cols="30" rows="10" placeholder="Your Message"></textarea><br>
                            <button type="submit"><a href="report.php">send</button></a><br>
                        </form>
                    </div>
                </div>
            </section>
        </form>
        <footer>
            <p>Copyright &copy; 2017 | YourName</p>
        </footer>

        <script>
            function calculator() {
                cost = document.getElementsById("price").value;
                choice = document.getElementById("choice").value;
                if (choice == "annual") {
                    document.getElementById("result").innerHTML = cost / 400;
                } else {
                    document.getElementById("result").innerHTML = cost / 345;
                }
            }
        </script>


    </body>

</html>
<html>

<body>