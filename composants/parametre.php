<div class="parametre mx-auto p-4 flex flex-col items-center border-4 border-yellow-400 bg-yellow-100 rounded-lg md:w-1/4">
    <h2 class="text-center text-xl mb-4">Choisir une punition</h2>
    <span id="modal" class="material-symbols-outlined cursor-pointer hover:scale-105" >
settings
</span>

</div>

<div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="modalContent">
  <form action="traitement/paramHandler.php" class="bg-white p-8 rounded-xl shadow-lg flex flex-col gap-4 w-80">
    
    <label for="saison" class="font-semibold text-gray-700">Saison:</label>
    <select name="saison" id="saison" class="border border-gray-300 rounded-md p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <?php
      $data = $_SESSION['data'];
      foreach ($data as $saisonNumber => $saison) {
          echo "<option value='" . htmlspecialchars($saisonNumber) . "'>Saison " . htmlspecialchars($saisonNumber) . "</option>";
      }
      ?>
    </select>

    <label for="episode" class="font-semibold text-gray-700">Episode:</label>
    <select name="episode" id="episode" class="border border-gray-300 rounded-md p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <?php
      $firstSeason = reset($data);
      foreach ($firstSeason as $episodeIndex => $episode) {
          echo "<option value='" . htmlspecialchars($episodeIndex + 1) . "'>Episode " . htmlspecialchars($episodeIndex + 1) . "</option>";
      }
      ?>
    </select>

    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors">Valider</button>

  </form>
</div>
