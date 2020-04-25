<!DOCTYPE html>
<html>
<style type="text/css" media="print">
    @page {
        size: auto;
        margin: 0mm;
    }
    /* @page {
           width    : 4.00in;
           height   : 6.01in;      
           margin   : 0mm;
        }*/
    
    @media print {
        html,
        body {
            width: 40mm;
            height: 20mm;
        }
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<?php 
// $name = $_GET["name"];
// $id = $_GET["id"];
// $dob = $_GET["dob"];
// $date = $_GET["date"];
// $test = $_GET["test"];
// $perusahaan = $_GET["perusahaan"];

$name = 'asasa';
$id = 'asasa';
$dob = 'asasa';
$date = 'asasa';
$test = 'asasa';
$perusahaan = 'asasa';
//var_dump($_GET);die;
?>
<body style = "font-size:11px;"><br>
&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $name ?><br>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id ?>
&nbsp;&nbsp;&nbsp;&nbsp; <img width="150" height="20" id="printable" src="print.php?text=<?php echo $id ?>" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $perusahaan ?><br>
&nbsp;&nbsp;&nbsp; &nbsp;DOB : <?php echo$dob ?><br>
&nbsp; &nbsp;&nbsp;&nbsp;DateSample : <?php echo $date ?><br>
&nbsp;&nbsp; &nbsp;&nbsp;<?php echo $test ?>



    <script type="text/javascript">
        jQuery(document).ready(function($) {
            printBarCode();
        });

        function printBarCode() {
            // hide elements
            // var allEl = document.body.getElementsByTagName("*")
            // for(var i=0; i<allEl.length; i++) {
            //     allEl[i].style.display = "none";
            // }

            //pilih elemen yang mau diprint
            document.getElementById('printable').style.setProperty("display", "block", "important")
            window.print();
        }
    </script>
</body>
</html>