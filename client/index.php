<!DOCTYPE html>
<html lang="en">
<head>
  <title>Currency Coverter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Currency Converter</h2>
  <p>This is a web service to do currency conversion.</p>
  <form action="client.php" method="post">

    <div class="form-group">
        <label for="usr">Amount</label>
        <input type="number" class="form-control" id="usr" name="amount">
      </div>

    <div class="form-group">
      <label for="sel1">Source Currency Type</label>
      <select class="form-control" id="sel1" name="source">
        <option value="AED">AED</option>
        <option value="AFN">AFN</option>
        <option value="ALL">ALL</option>
        <option value="USD">USD</option>
        <option value="LKR">LKR</option>
      </select>
      <br>
    </div>

    <div class="form-group">
        <label for="sel2">Target Currency Type</label>
        <select class="form-control" id="sel2" name="target">
          <option value="AED">AED</option>
          <option value="AFN">AFN</option>
          <option value="ALL">ALL</option>
          <option value="USD">USD</option>
          <option value="LKR">LKR</option>
        </select>
        <br>
      </div>

      <button type="submit" class="btn btn-success" name="submit">Convert</button>

  </form>

  <?php if(isset($_GET['message'])){ ?>

    <div class="alert alert-success" role="alert"><b><?php echo $_GET['message'];?></b></div>
  
  <?php }?>

</div>

</body>
</html>