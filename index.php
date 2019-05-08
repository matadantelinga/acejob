<?php include"header.php"; ?>

  <div class="form-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">  
        <h1> Let us know <br/> Your Favorite Book</h1>
        </div>
        <div class="col-md-6 col-12">
        <form action="library.php" method="get" id="myForm">
          <label>Book Name:</label> <input type="text" name="name" data-validation="required"><br />
          <label>Book Category:</label> <input type="text" name="category" ><br />
          <label>Book Rating:</label> <input name="range" type="range" min="1" max="10" value="0" class="slider" id="bookRate" class="form-control-range"> 
          <p>Rate <span id="rateRange"></span></p>
          <label>Contact Email: </label><input type="email" name="email" data-validation="email"><br />
          <div class="btn-wrapper align-right">
          <input type="reset" class="btn btn-gray">
          <input type="submit" class="btn btn-primary">
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
<?php include"footer.php";?>