<?php
?>
<?php require "templates/header.php" ?>

<section class="mt-62">
  <ul class="grid grid-rows-1 grid-cols-3">
<?php foreach($results as $player): ?> 
    <li class="max-w-sm bg-slate-700 rounded-lg p-2 flex flex-col justify-center items-center gap-4 m-4">
      <div class="w-full h-62 relative flex flex-col">
        <div class="bg-purple-600 w-full h-full absolute animate-progress flex flex-col items-center justify-center">
    <h4 class="text-gray-200 font-semibold text-sm"><?= $this->getArgs($player["username"]) ?></h4>
        <img class="" src="public/skins/body/<?= $this->getArgs($player["skin"])?>.png" />
                </div>
      </div>
      <div class="bg-slate-900 rounded-lg w-full p-2 flex flex-row items-center justify-between gap-4">
          <div class="flex flex-col  bg-purple-600 p-2 rounded-lg font-bold text-white uppercase text-center">
          <span><?= $this->getArgs($player["level"])?> </span>
          <span>level</span>
        </div>
        <div class="w-full">
          <span class="block text-end text-gray-200 font-semibold text-sm">Nivel <?= $this->getArgs($player["level"])?></span>
          <div class=" block h-2 bg-purple-800 relative">

          <div class="absolute block w-[50%] animate-progress h-2 bg-purple-500"></div>
</div>
<div class="text-violet-200 flex flex-row items-center justify-between">
<span class="uppercase text-sm">Respeitos</span>
<span class="text-xs"><span class="text-violet-600 font-bold font-sm">543</span>/832</span>
</div>
        </div>
      </div>
    </li>
<?php endforeach; ?>
  </ul>
</section>

<?php require "templates/footer.php" ?>
