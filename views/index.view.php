<?php require('partials/head.php'); ?>
<body>
  <table>
    <thead>
      <th><strong>Product</strong></th>
      <th><strong>Aantal</strong></th>
      <th><strong>Prijs</strong></th>
      <th><strong>Subtotaal</strong></th>
    </thead>
    <?php

    //if falsy, execute foreach, else dont
      foreach($groceries as $value){ ?>
        <tr>
          <td><?= $value->name; ?></td>
          <td><?= $value->quantity; ?></td>
          <td><?= $value->price; ?></td>
          <td><?= $value->price * $value->quantity; ?></td>
        </tr>
        <?php } ?>
    <tr>
      <td colspan="3">Totaal</td>
      <td id="total"><?php ?></td>
    </tr>
  </table>
  <?php require('partials/footer.php'); ?>