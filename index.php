<?php
$states=array("1"=>"Province 1","2"=>"Province 2",
"3"=>"Province 3","4"=>"Province 4","5"=>"Province 5",'6'=>"Province 6","7"=>"Province 7");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Budget Allocation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='js/chosen.jquery.min.js'></script>
  <script src='https://cdnjs.com/libraries/Chart.js'></script>
  <link rel="stylesheet" type="text/css" href="css\navbar_style.css">
  <link rel="stylesheet" type="text/css" href="css/extra_css.css">
</head>
<body>
<?php require_once("commonly_used/navbar.php");?>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="margin-top:5px;">
<table>
  <tr>
    <td colspan="2">
      <select class="form-control">
        <option value="">--Select Province--</option>
      <?php foreach($states as $num=>$name)
      {
    ?>
    <option value="<?php echo $num; ?>"><?php echo $name; ?>
  <?php } ?>

      </select>
    </td>
    <td colspan="2">
      <select class="form-control">
        <option value="">--Select Fiscal Year--</option>
        <option value="1">Fisca Year 2074/75</option>
        <option value="1">Fisca Year 2075/76</option>
        <option value="1">Fisca Year 2076/77</option>
      </select>
    </td>
    <td colspan="2">
      <select class="form-control">
        <option value="">--select Expenditure--</option>
        <option value="1">Education</option>
        <option value="1">Public Peace and Security</option>
        <option value="1">Environment Protection</option>
        <option value="1">Sports</option>
      </select>
    </td>
    <td colspan="2">
      <select class="form-control">
        <option value="">--Select Revenue Source--</option>
        <option value="1">Agriculture</option>
        <option value="1">Remitance</option>
        <option value="1">Tourism</option>
          <option value="1">Tax</option>
            <option value="1">Aid</option>
        <option value="1">Other</option>
      </select>
    </td>
    <td colspan="2">
      <button type="submit" class="btn btn-success btn-block" id="submit_id">Find Result</button>
    </td>
  </tr>

</table>
</div>

</div>
<div class="row">
<div class="col-sm-12" style="margin-top:5px;">
  <iframe src="commonly_used\tabalue_link.php" id="tabelu"></iframe>
</div>
</div>
</div>
<?php require_once("commonly_used/footer.php");?>
<script>
$('#submit_id').click(function()
{
  alert("Sorry Currently we do not have data.");
});
</script>
</body>
</html>
