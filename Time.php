<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="icon" href="https://www.morganarae.com/wordpress/wp-content/uploads/2017/09/illusionoftime.jpg" type="image/jpeg" sizes="16x16" />
        <!-- ---- Include the above in your HEAD tag -------- -->
    </head>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Lato:100,400);
        .mb20{
            margin-bottom:20px;
        }
        section {
            padding: 40px 0;
        }
        #timer .countdown-wrapper {
            margin: 0 auto;
        }
        #timer #countdown {
            font-family: 'Lato', sans-serif;
            text-align: center;
            color: #FF69B4;
            text-shadow: 1px 1px 5px black;
            padding: 40px 0;
        }
        #timer .countdown-wrapper #countdown .timer {
            margin: 10px;
            padding: 20px;
            font-size: 90px;
            border-radius: 50%;
            cursor: pointer;
        }
        #timer .col-md-4.countdown-wrapper #countdown .timer {
            margin: 10px;
            padding: 20px;
            font-size: 35px;
            border-radius: 50%;
            cursor: pointer;
        }
        #timer .countdown-wrapper #countdown #hour {
            -webkit-box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
            -moz-box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
            box-shadow: 0 0 0 5px rgba(92, 184, 92, .5);
        }
        #timer .countdown-wrapper #countdown #hour:hover {
            -webkit-box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
            -moz-box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
            box-shadow: 0px 0px 15px 1px rgba(92, 184, 92, 1);
        }
        #timer .countdown-wrapper #countdown #min {
            -webkit-box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
            -moz-box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
            box-shadow: 0 0 0 5px rgba(91, 192, 222, .5);
        }
        #timer .countdown-wrapper #countdown #min:hover {
            -webkit-box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
            -moz-box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
            box-shadow: 0px 0px 15px 1px rgb(91, 192, 222);
        }
        #timer .countdown-wrapper #countdown #sec {
            -webkit-box-shadow: 0 0 0 5px rgba(2, 117, 216, .5);
            -moz-box-shadow: 0 0 0 5px rgba(2, 117, 216, .5);
            box-shadow: 0 0 0 5px rgba(2, 117, 216, .5)
        }
        #timer .countdown-wrapper #countdown #sec:hover {
            -webkit-box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
            -moz-box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
            box-shadow: 0px 0px 15px 1px rgba(2, 117, 216, 1);
        }
        #timer .countdown-wrapper .card .card-footer .btn {
            margin: 2px 0;
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            #timer .countdown-wrapper #countdown .timer {
                margin: 10px;
                padding: 20px;
                font-size: 65px;
                border-radius: 50%;
                cursor: pointer;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            #timer .countdown-wrapper #countdown .timer {
                margin: 10px;
                padding: 20px;
                font-size: 72px;
                border-radius: 50%;
                cursor: pointer;
            }
        }
        @media (max-width: 768px) {
            #timer .countdown-wrapper #countdown .timer {
                margin: 10px;
                padding: 20px;
                font-size: 73px;
                border-radius: 50%;
                cursor: pointer;
            }
        }
        @media (max-width: 767px) {
            #timer .countdown-wrapper #countdown #hour,
            #timer .countdown-wrapper #countdown #min,
            #timer .countdown-wrapper #countdown #sec {
                font-size: 60px;
                border-radius: 4%;
            }
        }
        @media (max-width: 576px){
            #timer .countdown-wrapper #countdown #hour,
            #timer .countdown-wrapper #countdown #min,
            #timer .countdown-wrapper #countdown #sec {
                font-size: 25px;
                border-radius: 4%;
            }
            #timer .countdown-wrapper #countdown .timer {
                padding: 13px;
            }
        }
    </style>
    <body>
        <?php
        date_default_timezone_set("Asia/Calcutta");
        $intime = "10:01:00";//change everyday
        $intime = strtotime(date("Y-m-d") . " " . $intime);
   

        $timeToWork = '08:45:00';
        $seconds = strtotime("1970-01-01 $timeToWork UTC");
 

        $outTime = date("Y-m-d H:i:s", $seconds + $intime);
        $outTimeInSec = $seconds + $intime;
        $escaped_time = time() - $intime;

// remaining time
        $remainingTime = $outTimeInSec - time();
        $hr = gmdate("H", $remainingTime);
        $min = gmdate("i", $remainingTime);
        $sec = gmdate("s", $remainingTime);
        if ($remainingTime < 0) {
            $hr = gmdate("H", $escaped_time);
            $min = gmdate("i", $escaped_time);
            $sec = gmdate("s", $escaped_time);
        }
        ?>
       <div class="container">
            <section id="timer">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 countdown-wrapper text-center mb20">
                        <div class="card">
                            <?php
                            if ($remainingTime > 0) {
                                ?><div class="card-header">
                               <a href="#" class="btn btn-success">Time to work  </a> 
                            </div>
                            <div class="card-block">
                                <div id="countdown">
                                    <div class="well">
                                        <span id="hour" class="timer" style="background-color:#4169E1;"><?php echo $hr; ?></span>
                                        <span id="min" class="timer" style="background-color:#00BFFF;"><?php echo $min; ?></span> 
                                        <span id="sec" class="timer" style="background-color:#FFD700;"><?php echo $sec; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }else{
                                ?><div class="card-header">
                               <a href="#" class="btn btn-danger">Your <?=$timeToWork?> slot has been completed  </a> 
                            </div>
                            <div class="card-block">
                                <div id="countdown">
                                    <div class="well">
                                        <span id="hour" class="timer bg-success"><?php echo $hr; ?></span>
                                        <span id="min" class="timer bg-info"><?php echo $min; ?></span> 
                                        <span id="sec" class="timer bg-primary"><?php echo $sec; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                            
                            <div class="card-footer">
                              <?php if ($remainingTime > 0) { ?>
                                    <a href="#" class="btn btn-success">Time to Leave : <?php echo date("h:i a", strtotime($outTime)); ?></a>
                                <?php }else{ ?>
                                    <a href="#" class="btn btn-danger">Time up at : <?php echo date("h:i a", strtotime($outTime)); ?>, Leave as early as possible</a>
                               <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script>
    $(document).ready(function () {
    
    });
    setTimeout(function () {
        location.reload();
    }, 1000);
</script>
