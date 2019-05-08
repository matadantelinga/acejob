<?php include"header.php"; ?>
<div class="form-wrapper">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Your Favorite Book is</h1>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="result">
        Book Name: <?php echo $_GET["name"];  ?><br>
        Book Category: <?php echo $_GET["category"];  ?><br>
        Book Rating: <?php echo $_GET["range"];  ?><br>
        Your email address is: <?php echo $_GET["email"];  ?>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="btn-wrapper align-right">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </div>
    </div>
</div>
</div>



<?php include"footer.php";?>