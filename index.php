<!DOCTYPE>
<html>
<title>Exercice3</title>
<meta  charset="UTF-8">
</head>
<body>
  <!-- exercice 1 -->
  <?php
    $chiffre = 0;
    while ($chiffre <= 10)
  {echo $chiffre ++;}
  ?>
  <hr>
    <!-- exercice 2 -->
  <?php
    $a = 0;
    $b = 15;
    while ($a <=20)
    {$c = $a * $b; echo $c; $a++;}
  ?>
    <hr>
      <!-- exercice 3 -->
    <?php
      $a = 100;
      $b = 20;
      while ($a >= 10)
      {$c = $a * $b; echo $c; $a--;}
     ?>
     <hr>
       <!-- exercice 4 -->
    <?php
      $a = 1;
      while ($a <=10)
      {echo $a ++;}
     ?>
     <hr>
       <!-- exercice 5 -->
     <?php
      $ligne = 1;
      while ($ligne <= 15)
      {echo $ligne." On y arrive presque.<br/>";
       $ligne ++;}
      ?>
      <hr>
        <!-- exercice 6 -->
      <?php
       $ligne = 20;
       while ($ligne >= 0)
       {echo $ligne." C'est presque bon.<br/>";
       $ligne --;}
      ?>
      <hr>
        <!-- exercice 7 -->
      <?php
        $ligne = 1;
        while ($ligne <= 100)
        {echo $ligne." On tient le bon bout.<br/>";
        $ligne +=15;}
      ?>
      <hr>
        <!-- exercice 7 -->
      <?php
        $ligne = 200;
        while ($ligne >= 0)
        {echo $ligne." Enfin.<br/>";
         $ligne -=12;}
       ?>
</body>
</html>
