<?php include 'elements/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- HEAD -->
  <?php include 'elements/head.php'; ?>
</head>
<body>

<!-- NAV BAR -->
<?php include 'elements/navbar.php'; ?>
  
<div class="container">
  <hr><h1>Mining Yield Calculator</h1><hr>
  <p>This calculator is used to calculate the amount of ore you are expected to receive after x amount of time. Please input the details into the form below.</p>

  <form>
    <div class="form-group">
      <label >Ore Type (optional)</label>
      <input type="text" class="form-control" id="name" placeholder="Ore">
    </div>
    <div class="form-group">
      <label >Yield (per 1 cycle)</label>
      <p style="font-size:11px;">Note: This is found by running a complete cycle and noting how much ore was returned to your inventory.</p>
      <input type="number" class="form-control" id="amount" placeholder="Yield" required>
    </div>
    <div class="form-group">
      <label >Cycle Length (in seconds)</label>
      <p style="font-size:11px;">Note: This is found by hovering your mouse over your mining laser, gas scooper, ice harvester etc.</p>
      <input type="number" class="form-control" id="length" placeholder="Length" required>
    </div>
    <div class="form-group">
      <label >Number of players mining</label>
      <input type="number" class="form-control" id="players" placeholder="1" value="1">
    </div>
    <div class="form-group">
      <label >Time mining (minutes)</label>
      <input type="number" class="form-control" id="time" placeholder="60" value="60" >
    </div>
    <p onclick="calculate()" class="btn btn-primary">Calculate</p>
  </form>

  <h3>Result: "<i> <span style="font-size:20px" id='display'>---</span> </i>"</h3>
  <p></p>
</div>


  <!-- SCRIPTS -->
  <?php include 'elements/scripts.php'; ?>
</body>
  <!-- FOOTER -->
  <?php include 'elements/footer.php'; ?>
</html>

<script>
    function calculate()
    {
        //Get Form Inputs
        var name = document.getElementById('name');
        var amount = document.getElementById('amount');
        var length = document.getElementById('length');
        var players = document.getElementById('players');
        var time = document.getElementById('time');
        
        //Get the values of each input
        name = name.value;
        amount = amount.value;
        length = length.value
        players = players.value;
        time = time.value;

        //Calculate the yield with the supplied inputs
        amount = amount / length //Amount per second
        amount = amount * 60 //Amount per minute
        amount = amount * time //Amount times the number of minutes mining
        amount = amount * players //Amount times the number of players
        amount = Math.round((amount + Number.EPSILON) * 100) / 100; //Round the number to 2 decimals

        //Check to make sure amount is a number
        if (isNaN(amount))
        {
          amount = 0
        }

        //Concat into a simple return value
        result = 
          "<b>" + amount + "</b> <b>" 
          + name + "</b> will be obtained in <b>" 
          + time + "</b> minutes for <b>" 
          + players + "</b> miner(s)."

        //Display to user
        document.getElementById('display').innerHTML = result
    }
</script>

