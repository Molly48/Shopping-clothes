<center>
<h1 style="background-color:#cb9cc7;", style="font-family: serif;"><strong>DETAILS PRICE</strong></h1> 
        <body style="background-color:#dec2dc;">

            <?php

$Code = $_POST['Code'];
$Quantity = $_POST['Quantity'];

switch($Code){
    case 1:
    $price = 210.90;
    break;

    case 2:
    $price = 249.00;
    break;

    case 3:
    $price = 310.90;
    break;

    case 4:
    $price = 250.90;
    break;
        {   
            echo "THANK YOU!";
        }
      
        default:
        $price = 0;
        $Code = "The code is invalid";
        break;
    }
    
    $Total = $Quantity * $price;
    
    $Total = round($Total, 2);
    
    if ($Total > 500) {
        $Total = $Total * 0.9;
    }
    
    echo "<p> Code : $Code</p>";
    echo "<p> Quantity : $Quantity</p>";
    echo "<p> Total : RM $Total</p>";
    
    ?>
    
 </center>
 </body>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>