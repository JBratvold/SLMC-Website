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
  <button class="btn btn-primary" style="pointer-events: none;">Contact <i class="webDeveloperName">Sin Sacred</i> to update.</button>
  <!-- TITLE -->
  <div class="container">
    <div class="title">
      <p>Combat Sites</p>
    </div>
  </div>

  <!-- PAGE CONTENT -->
  <div class="container">
    <hr><h1>Cosmic Anomalies</h1><hr>
    <p>Unlike cosmic signatures, they do <b>not</b> need any scanning equipment to locate, 
      and instead will automatically appear in the scanning window.</p>

    <table id="anomaliesTable">
      <tr>
        <th>Difficulty</th>
        <th>I</th>
        <th>II</th>
        <th>III</th>
        <th>IV</th>
        <th></th>
        <th></th>
        <th>Rogue Drones</th>
      </tr>
      <tr>
        <td>1</td>
        <td class="modal-trigger" title="Sansha Hideaway" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Plague <i>(Commander Frigate)</i>" escalation="May escalate to the 3/10 DED site: Sansha's Command Relay Outpost." description="" completed="No" recommendation="" bounty="35,000 ISK" salvage="Unknown" verified="">Hideaway</td>
        <td class="modal-trigger" title="Sansha Hidden Hideaway" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Plague <i>(Commander Frigate)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="280,000 ISK" salvage="Unknown" verified="">Hidden</td>
        <td class="modal-trigger" title="Sansha Forsaken Hideaway" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Ship <i>(Commander Frigate)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="350,000 ISK" salvage="Unknown" verified="">Forsaken</td>
        <td class="modal-trigger" title="Sansha Forlorn Hideaway" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Ravener <i>(Commander Frigate)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="500,000 ISK" salvage="Unknown" verified="">Forlorn</td>
        <td></td>
        <td></td>
        <td>Cluster</td>
      </tr>
      <tr>
        <td>2</td>
        <td class="modal-trigger" title="Sansha Burrow" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Plague <i>(Commander Frigate)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="60,000 ISK" salvage="Unknown" verified="">Burrow</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Collection</td>
      </tr>
      <tr>
        <td>3</td>
        <td class="modal-trigger" title="Sansha Refuge" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Cannibal <i>(Commander Destroyer)</i>" escalation="May escalate to the 3/10 DED site: Sansha's Command Relay Outpost." description="" completed="No" recommendation="" bounty="150,000 ISK" salvage="Unknown" verified="">Refuge</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Assembly</td>
      </tr>
      <tr>
        <td>4</td>
        <td class="modal-trigger" title="Sansha Den" loot="Yes" lootRarity="Rare" lootShip="True Sansha Commander <i>(Commander Cruiser)</i>" escalation="May escalate to the 5/10 DED site: Sansha's Nation Neural Paralytic Facility." description="Only small ships (frigates + destroyers) and a few cruisers. And 2 or 3 missile towers." completed="Yes" recommendation="1 cruiser was easy (as long as you can kill small targets)" bounty="250,000 ISK" salvage="Unknown" verified="Sacred Sin">Den</td>
        <td class="modal-trigger" title="Sansha Hidden Den" loot="No" lootRarity="N/A" lootShip="N/A" escalation="May escalate to the 6/10 DED site: Sansha War Supply Complex." description="Estimated bounty payout of 3mil ISK." completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Hidden</td>
        <td class="modal-trigger" title="Sansha Forsaken Den" loot="No" lootRarity="N/A" lootShip="N/A" escalation="" description="" completed="No" recommendation="" bounty="4 million isk" salvage="Unknown">Forsaken</td>
        <td class="modal-trigger" title="Sansha Forlorn Den" loot="Yes" lootRarity="Rare" lootShip="True Sansha Ship" escalation="May escalate to the 6/10 DED site: Sansha War Supply Complex." description="Lots of ships. Mostly Cruisers/Battle Cruisers, but also had ~Battleships at the end." completed="Yes" recommendation="Probably could do with 2 cruisers, but may be a bit hard and long." bounty="Unknown" salvage="Unknown" verified="Sin Sacred" >Forlorn</td>
        <td></td>
        <td></td>
        <td>Gathering</td>
      </tr>
      <tr>
        <td>5</td>
        <td class="modal-trigger" title="Sansha Yard" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Hellhound/Fiend <i>(Commander Cruiser)</i>" escalation="May escalate to the 6/10 DED site: Sansha War Supply Complex." description="" completed="Yes" recommendation="1 Navy Cruiser is fine to complete." bounty="2-4 million isk" salvage="Unknown" verified="Sin Sacred">Yard</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Surveillance</td>
      </tr>
      <tr>
        <td>6</td>
        <td class="modal-trigger" title="Sansha Rally Point" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Behemoth/Daemon <i>(Commander Battlecruiser)</i>" escalation="May escalate to the 6/10 DED site: Sansha War Supply Complex." description="2 missile turrets at the start. A few frigates/destroyers and cruisers/battle cruisers. 3rd wave (only cruisers+battle cruisers) did deal a bit more damage than the first 2, but it was still fine. Last wave had 1 battle cruiser and 1 battle ship, this was easy." completed="Yes" recommendation="1 Navy Cruiser is fine to complete. Previous loots: 500k-1mil." bounty="Unknown" salvage="2 million isk" verified="Sacred Jupiter">Rally Point</td>
        <td class="modal-trigger" title="Sansha Hidden Rally Point" loot="No" lootRarity="N/A" lootShip="N/A" escalation="May escalate to the unrated DED site: True Sansha Fleet Staging Point" description="" completed="No" recommendation="" bounty="15-20 million ISK" salvage="Unknown" verified="">Hidden</td>
        <td class="modal-trigger" title="Sansha Forsaken Rally Point" loot="No" lootRarity="N/A" lootShip="N/A" escalation="May escalate to the 8/10 DED site: Sansha Prison Camp." description="Not much information on this combat site." completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Forsaken</td>
        <td class="modal-trigger" title="Sansha Forlorn Rally Point" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Beast/Juggernaut <i>(Commander Cruiser)</i>" escalation="May escalate to the 8/10 DED site: Sansha Prison Camp." description="" completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Forlorn</td>
        <td></td>
        <td></td>
        <td>Menagerie</td>
      </tr>
      <tr>
        <td>7</td>
        <td class="modal-trigger" title="Sansha Port" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Daemon <i>(Commander Battlecruiser)</i>" escalation="May escalate to the 7/10 DED site: Sansha Military Operations Complex" description="" completed="Yes" recommendation="1 Navy Cruiser to complete, but takes a while (20minutes+) " bounty="10 million isk" salvage="Unknown" verified="Sacred Jupiter">Port</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Herd</td>
      </tr>
      <tr>
        <td>8</td>
        <td class="modal-trigger" title="Sansha Hub" loot="Yes" lootRarity="Rare" lootShip="True Sansha Ship <i>(Battleship)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Hub</td>
        <td class="modal-trigger" title="Sansha Hidden Hub" loot="Yes" lootRarity="Rare" lootShip="True Sansha Ship <i>(Battleship)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Hidden</td>
        <td class="modal-trigger" title="Sansha Forsaken Hub" loot="Yes" lootRarity="Rare" lootShip="True Sansha Ship <i>(Battleship)</i>" escalation="May escalate to the unrated DED site: True Sansha Fleet Staging Point." description="" completed="No" recommendation="" bounty="Unknown" salvage="16 million isk" verified="">Forsaken</td>
        <td class="modal-trigger" title="Sansha Forlorn Hub" loot="Yes" lootRarity="Rare" lootShip="True Sansha Ship <i>(Battleship)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Forlorn</td>
        <td></td>
        <td></td>
        <td>Squad</td>
      </tr>
      <tr>
        <td>9</td>
        <td class="modal-trigger" title="Sansha Haven" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Plague Lord <i>(Battleship)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="18 million isk" salvage="14 million isk" verified="">Haven</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Patrol</td>
      </tr>
      <tr>
        <td>10</td>
        <td class="modal-trigger" title="Sansha Sanctum" loot="Yes" lootRarity="Rare" lootShip="True Sansha's Tyrant <i>(Battleship)</i>" escalation="Unknown" description="" completed="No" recommendation="" bounty="Unknown" salvage="Unknown" verified="">Sanctum</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Horde</td>
      </tr>
    </table>
    </div>







  <!-- MODAL (DISPLAYED ON CLICK) -->
  <div id="cosmicAnomaliesModal" class="modal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content ">
        <span class="close">&times;</span>
        <div class="modal-header">      
          <h1><b><span id="title"></span></b></h1>
        </div>
          <div class="modal-body">
            <h2>Loot</h2>
            <p><b>Average Bounty: </b><span id="bounty"></span></p>
            <p><b>Average Salvage: </b><span id="salvage"></span></p>
            <p><b>Notable Loot: </b><span id="loot"></span></p>
            <p><b>Loot Rarity: </b><span id="lootRarity"></span></p>
            <p><b>Ship(s) containing loot: </b><span id="lootShip"></span></p>
            <h2>Escalations</h2>
            <p><b>Escalation: </b><span id="escalation"></span></p>
            <h2>Description</h2>
            <p><b>Recommendations: </b><span id="recommendation"></span></p>
            <p><b>Brief summary of this combat site: </b><span id="description"></span></p>
            <h2>Completion Status</h2>
            <p><b>Has this corp completed this site? </b><span id="completed"></span></p>
            <p><b>Information verified by: </b><span id="verified"></span></p>
          </div>
          <div class="modal-footer">      
            <p>  </p>
          </div>
      </div>
    </div>
  </div>


  <!-- SCRIPTS -->
  <?php include 'elements/scripts.php'; ?>
</body>
  <!-- FOOTER -->
  <?php include 'elements/footer.php'; ?>
</html>