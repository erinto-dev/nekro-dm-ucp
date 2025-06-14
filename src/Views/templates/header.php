<?php
$headerOptionsTwo = array(
  ["id" => 0, "title" => "Home", "url" => "/inicio"],
  ["id" => 1, "title" => "Novidades", "url" => "/novidades"],
  ["id" => 2, "title" => "Loja", "url" => "/loja"],
  ["id" => 3, "title" => "Ranking", "url" => "/rankings"],
);

?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="public/css/output.css" rel="stylesheet">
</head>

<body class="bg-violet-200">
  <header class="w-full h-24 bg-slate-800 flex justify-between fixed top-0 left-0">
      <nav class="container flex justify-between items-center text-white">
      <div class="w-32">
        <a href="/"><img src="/public/logo200.png" class="" alt="logo do servidor" /></a>
      </div>
      <ul class="flex items-center gap-4">

        <?php foreach ($headerOptionsTwo as $head) : ?>
          <li <?= $head["id"] ?>><a href="<?= $head["url"] ?>"><?= $head["title"] ?></a></li>
        <?php endforeach; ?>
      </ul>
      <ul class="flex items-center gap-4">
        <li>Search</li>
        <button class="px-4 py-2 rounded bg-red-600 hover:bg-red-700 transition-all">Entrar</button>
      </ul>
    </nav>
  </header>
<main class="mt-24 m-5">
