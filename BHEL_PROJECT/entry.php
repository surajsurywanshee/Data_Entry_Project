<?php
session_start();
include("connect.php");

  if (isset($_POST['submit'])) {
    # code...
    echo "hello";
    $Id;
    $Department = $_POST['Department'];
    $StoreCode = $_POST['StoreCode'];
    $prefix = $_POST['prefix'];
    $MaterialCode = $_POST['MaterialCode'];
    $ImpInd = $_POST['ImpInd'];
    $BinLocation = $_POST['BinLocation'];
    $MtlDesc = $_POST['MtlDesc'];
    $BinUnit = $_POST['BinUnit'];
    $BinBalance = $_POST['BinBalance'];
    $MTLRATE = $_POST['MTLRATE'];
    $CLOSEINGVALUE = $_POST['CLOSEINGVALUE'];
    $WorkOrderNo = $_POST['WorkOrderNo'];
    $CESNO = $_POST['CESNO'];
    $NGESNETQTY = $_POST['NGESNETQTY'];
    $AGESNETQTY = $_POST['AGESNETQTY'];
    $DemandedQty = $_POST['DemandedQty'];
    $PslUnit = $_POST['PslUnit'];
    $TobeIssued = $_POST['TobeIssued'];
    $Flag = $_POST['Flag'];
    $DefectCd = $_POST['DefectCd'];
    $IssueDate = $_POST['IssueDate'];
    $DocketNo = $_POST['DocketNo'];
    $MrNo = $_POST['MrNo'];
    $NewBalence = $_POST['NewBalence'];

    $sql ="INSERT into bharat_heavy_electricals_limited VALUE('$Id','$Department', '$StoreCode', '$prefix', '$MaterialCode','$ImpInd', '$BinLocation', '$MtlDesc', '$BinUnit', '$BinBalance', '$MTLRATE', '$CLOSEINGVALUE', '$WorkOrderNo', '$CESNO', '$NGESNETQTY', '$AGESNETQTY', '$DemandedQty', '$PslUnit', '$TobeIssued ', '$Flag', '$DefectCd', '$IssueDate', '$DocketNo', '$MrNo', '$NewBalence')";
    if (mysqli_query($conn, $sql)) {
      # code...
      echo "successfully store information";
      header("location: entry.php");
    }
    else{
      echo "Error:" .$conn->error;
    }
  
  }

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Entry page </title>
    <style>
            *{
            box-sizing:border-box;
            margin: 0;
            padding: 0;
            border-width: 100;
        }
        body{
             padding: 0;
            margin: 0;
            background: url(images/hand.jpg);
            background-size: cover;
        }
        header {
          margin: 0;
          padding: 0;
          height: 30px;
        }
        h1 {
          font-family: 'Times New Roman', Times, serif;
          text-shadow: #53e1ee;
        }
        form{
          font-family: 'Times New Roman', Times, serif;
          background-repeat: no-repeat;
          box-shadow: 2px 6px 100px #53e1ee;
          
        }
        button {
        color: #fff;
        background-color: #0d6efd;
        border-color: #175bc0;
        text-align: center;
        width: 30%;
        border-radius: 8px;
        justify-items: center;
        }

        .right{
          margin-left: 1350px;
          margin-right: 200px;
        }

        .left{
          margin-left: 1200px;
          margin-top: 10px;
          margin-bottom: -20px;
        }

        .display-8{
          margin-left: 250px;
        }

        .container_my-2_bg-dark-w-50_text-light_p-2{
          height: auto;
          width: 0px;
          
        }
        .row_g-3_p-3 .col-md-4{
          margin-left: 100px;
          position:inherit;
        }

        .button{
          position: center;
          margin-left: 100px;
        }
        
    </style>
  </head>
  <body>

  <div class="header">
  <div class="left">
        <p >
             <span>Welcome,</span>  <?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT sign_up_info.* FROM `sign_up_info` WHERE sign_up_info.email='$email'");
              while($row=mysqli_fetch_array($query)){
                  echo $row['username'];
              }
            }
             ?>
            :)

  </div>
  <div class="right">
    <a href="logout.php">Logout</a>
  </div>
</div>
    <!-- <img src="/Images/img4.jpg" height="100%" width="100%" alt="background"> -->
   <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-8">Welcome To Bharat Heavy Electricals Limited, Bhopal</h1>
       </header>
   </div>
   <section class="container_my-2_bg-dark_w-50_text-light_p-2">
    <form action="entry.php" method="post" class="row_g-3_p-3">
        <div class="col-md-4">
            <label for="valueDepartment" class="form-label">Dept</label>
            <input type="text" class="form-control" name="Department" id="1" placeholder="Dep..." required>
          </div>
          <div class="col-md-4">
            <label for="valueStoreCode" class="form-label">Store Code</label>
            <input type="number" class="form-control" name="StoreCode" id="2" placeholder="St Code..." required>
          </div>
          <div class="col-md-4">
            <label for="valueprefix" class="form-label">Prefix</label>
            <div class="input-group">
              <input type="text" class="form-control" name="prefix" id="3"  placeholder="Pre..." required>
            </div>
          </div>
          <br>
          <div class="col-md-4">
            <label for="valueMaterialCode" class="form-label">Maretrial Code </label>
            <div class="input-group">
              <input type="number" class="form-control" name="MaterialCode" id="4"  placeholder="Mate Code..." required>
            </div>
          </div>
          <br>
          <div class="col-md-4">
            <label for="valueImpInd" class="form-label">Imp/ Ind </label>
            <div class="input-group">
              <input type="text" class="form-control" name="ImpInd" id="5" placeholder="Imp../Ind.." required>
            </div>
          </div>
        <div class="col-md-4">
          <label for="valueBinLocation" class="form-label">Bin Location </label>
          <input type="text" class="form-control" name="BinLocation" id="6" placeholder="Bin Loc..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueMtlDesc" class="form-label">Mtl Desc.</label>
          <input type="text" class="form-control" name="MtlDesc" id="7" placeholder="Mtl Desc..."  required>
        </div>
        <br>
        <div class="col-md-4">
          <label for="valueBinUnit" class="form-label">Bin Unit </label>
          <input type="number" class="form-control" name ="BinUnit" id="8" placeholder="Bin Unit..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueBinBalance" class="form-label">Bin Balance</label>
          <input type="number" class="form-control" name="BinBalance" id="9" placeholder="Bin Bal..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueMTLRATE" class="form-label">MTL. RATE</label>
          <input type="text" class="form-control" name="MTLRATE" id="10" placeholder="MTL Rate..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueCLOSEINGVALUE" class="form-label">CLOSEING VALUE</label>
          <input type="number" class="form-control" name="CLOSEINGVALUE" id="11" placeholder="CLG VAL..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueWorkOrderNo" class="form-label">Work Order No.</label>
          <input type="number" class="form-control" name="WorkOrderNo" id="12" placeholder="W.O.N..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueCESNO" class="form-label">CES No.</label>
          <input type="number" class="form-control" name="CESNO" id="13" placeholder="CES NO..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueGESNETQTY" class="form-label">GES NET QTY</label>
          <input type="text" class="form-control" name="NGESNETQTY" id="14" placeholder="G.N.Q..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueGESNETQTY" class="form-label">GES AVL QTY</label>
          <input type="text" class="form-control" name="AGESNETQTY" id="15" placeholder="G.A.Q..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueDemandedQty" class="form-label">Demanded Qty.</label>
          <input type="text" class="form-control" name="DemandedQty" id="16" placeholder="Dem Qty..."  required>
        </div>
        <div class="col-md-4">
          <label for="valuePslUnit" class="form-label">Psl Unit</label>
          <input type="number" class="form-control" name="PslUnit" id="17" placeholder="Psl Unit..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueTobeIssued" class="form-label">To be Issued Qty.</label>
          <input type="text" class="form-control" name="TobeIssued" id="18" placeholder="T.B.I.QRT..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueFlag" class="form-label">Flag</label>
          <input type="text" class="form-control" name="Flag" id="19" placeholder="Flag..."  required>
        </div>

        <div class="col-md-4">
          <label for="valueDefectCd" class="form-label">Defect Cd</label>
          <input type="text" class="form-control" name="DefectCd" id="20" placeholder="Def Cd..."  required>
        </div>
       
        <div class="col-md-4">
          <label for="valueIssueDate" class="form-label">Issue Date</label>
          <input type="date" class="form-control" name="IssueDate" id="21" placeholder="Issue Date..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueDocketNo" class="form-label">Docket No</label>
          <input type="number" class="form-control" name="DocketNo" id="22" placeholder="Doc No..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueMrNo" class="form-label">Mr No</label>
          <input type="number" class="form-control" name="MrNo" id="23" placeholder="Mr No..."  required>
        </div>
        <div class="col-md-4">
          <label for="valueNewBalence" class="form-label">New Balance</label>
          <input type="text" class="form-control" name="NewBalence" id="24" placeholder="New Bal..."  required>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
        </label>
          </div>
        </div>
        <div class="button">
          <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </div>
      </form>
   </section>
  </body>
</html>