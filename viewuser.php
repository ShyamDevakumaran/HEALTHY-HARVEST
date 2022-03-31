<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete records from database using PHP - Coding Birds Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/viewuser.css">
    <style>
        #thead>tr>th{ color: white; }
    </style>
</head>
<body>
<div style="margin-top: 20px;padding-bottom: 20px;">
    <center>
        <h3>VIEWING  USER RECORDS FOM DATABASE </h3>
    </center>
</div>
<div class="container">
    <table class="table">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "viewuserconfig.php";
        $common = new Common();
        $records = $common->getAllRecords($connection);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
               
                $name = $record->name;
                
                $password = $record->password;?>
                <tr>
                    <th><?php echo $sr;?></th>
                    <th><?php echo $name;?></th>
                    <th><?php echo $password;?></th>
                </tr>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>