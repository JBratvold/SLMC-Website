<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>



<script>
/*<!-- MODAL SCRIPT (pop up) -->*/



// Get the modal
var modal = document.getElementById("cosmicAnomaliesModal");

// Get the message element
var title = document.getElementById("title");
var loot = document.getElementById("loot");
var lootRarity = document.getElementById("lootRarity");
var lootShip = document.getElementById("lootShip");
var escalation = document.getElementById("escalation");
var description = document.getElementById("description");
var completed = document.getElementById("completed");
var recommendation = document.getElementById("recommendation");
var bounty = document.getElementById("bounty");
var salvage = document.getElementById("salvage");
var verified = document.getElementById("verified");


// Get all elements with the class "modal-trigger"
var triggers = document.querySelectorAll(".modal-trigger");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// Add an event listener to each trigger
triggers.forEach(function(trigger) {
  trigger.addEventListener("click", function() {
    title.innerHTML = trigger.getAttribute("title");
    loot.innerHTML = trigger.getAttribute("loot");
    lootRarity.innerHTML = trigger.getAttribute("lootRarity");
    lootShip.innerHTML = trigger.getAttribute("lootShip");
    escalation.innerHTML = trigger.getAttribute("escalation");
    description.innerHTML = trigger.getAttribute("description");
    completed.innerHTML = trigger.getAttribute("completed");
    recommendation.innerHTML = trigger.getAttribute("recommendation");
    bounty.innerHTML = trigger.getAttribute("bounty");
    salvage.innerHTML = trigger.getAttribute("salvage");
    verified.innerHTML = trigger.getAttribute("verified");
    modal.style.display = "block";
  });
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>