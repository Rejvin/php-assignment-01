<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Assignment #01</title>
    
    <style>
        body {color: #333;}
        .section-padding {padding: 50px 100px;}
        fieldset {padding: 40px 60px;} 
        strong {font-size: 25px; color: #000;}
    </style>
</head>
<body>
    <div class="section-padding">
        <fieldset>
            <legend><h2>Assignment</h2></legend>
            <h3><strong>Student Name: </strong> Rejvin Akhter</h3>
            <h3><strong>Assignment N0: </strong> PHP #01</h3>
            <h3><strong>Assignment Name: </strong> Find the biggest number from 3 variables.</h3>
            
            
            <fieldset>
                <h4 style="text-align: center;">
                <p style="font-size: 40px;">The result is here :</p>
                    <?php
                        $runu_age = 50;
                        $simu_age = 40;
                        $binu_age = 30;
                    if ($runu_age > $simu_age) {
                        if ($runu_age > $binu_age) {
                            echo 'Runu is bigger than Binu and Simu!!!';
                        }
                        else {
                            echo 'Binu is bigger than Runu and Simu!!!';
                        }
                    }
                    else {
                        if ($simu_age > $binu_age) {
                            echo 'Simu is bigger than Binu and Runu!!!';
                        }
                        else {
                            echo 'Binu is bigger than Simu and Runu!!!';
                        }
                    }
                    ?>
                </h4>
            </fieldset>
        </fieldset>
    </div>
</body>
</html>