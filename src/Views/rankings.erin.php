<?php

$rankings = array(
  ["id" => 0, "title" => "ranking dinheiro", "url" => "/rankings/dinheiro"],
  ["id" => 1, "title" => "ranking level", "url" => "/rankings/level"],
  ["id" => 2, "title" => "ranking horas jogadas", "url" => "/rankings/horas"],
  ["id" => 3, "title" => "ranking abates", "url" => "/rankings/abates"],
  ["id" => 4, "title" => "ranking mortes", "url" => "/rankings/mortes"],
  ["id" => 5, "title" => "ranking doações", "url" => "/rankings/doacoes"],
);
?>

<?php require "templates/header.php" ?>
<section class="flex items-center flex-col gap-8">
<h1 class="text-2xl font-bold">Rankings do servidor</h1>
<ul class="">
<?php foreach($rankings as $ranking): ?>
<li class="m-2" <?= $ranking["id"] ?>><a class="block text-center mb-2 py-2 px-6 bg-indigo-500 hover:bg-indigo-600 transition-all font-bold text-white" href="<?= $ranking["url"]?>"><?= $ranking["title"]?></a></li>
<?php endforeach; ?>
</ul>
</section>
<?php require "templates/footer.php" ?>
