<div class="parametre mx-auto p-4 flex flex-col items-center border-4 border-yellow-400 bg-yellow-100 rounded-lg md:w-1/4">
  <h2 class="text-center text-xl mb-4 font-bold text-yellow-900">Choisir une punition</h2>
  <div class="flex gap-4">
    <span id="modal" class="material-symbols-outlined cursor-pointer hover:scale-105 text-3xl text-yellow-900">settings</span>
    <span id="resetBtn" class="material-icons cursor-pointer hover:scale-105 text-3xl text-red-600">restart_alt</span>
  </div>
</div>

<div id="modalContent" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-30 hidden transition-opacity duration-300">
  <form action="traitement/paramHandler.php" method="post" class="bg-yellow-100 border-4 border-yellow-400 p-6 rounded-xl shadow-xl flex flex-col gap-4 w-full max-w-md mx-auto">
    
    <h2 class="text-center text-xl font-bold text-yellow-900">Sélectionner un épisode</h2>

    <label for="saison" class="font-semibold text-yellow-900">Saison:</label>
    <select name="saison" id="saison" class="border border-yellow-300 rounded-md p-2 text-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500">
      <?php
      $data = $_SESSION['data'];
      $saisons = $data['saisons'];
      $_SESSION['saisons'] = $saisons;

      foreach ($saisons as $nomSaison => $episodes) {
          echo "<option value='" . htmlspecialchars($nomSaison) . "'>" . htmlspecialchars($nomSaison) . "</option>";
      }
      ?>
    </select>

    <label for="episode" class="font-semibold text-yellow-900">Épisode:</label>
    <select id="episode" name="episode" class="border border-yellow-300 rounded-md p-2 text-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500"></select>

    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors">Valider</button>
  </form>
</div>

<script>
const saisons = <?php echo json_encode($saisons, JSON_UNESCAPED_UNICODE); ?>;
const saisonSelect = document.getElementById('saison');
const episodeSelect = document.getElementById('episode');

function updateEpisodes() {
  const saisonChoisie = saisonSelect.value;
  const episodes = saisons[saisonChoisie];
  episodeSelect.innerHTML = "";
  for (const titreEpisode in episodes) {
    const option = document.createElement("option");
    option.value = titreEpisode;
    option.textContent = titreEpisode;
    episodeSelect.appendChild(option);
  }
}
updateEpisodes();
saisonSelect.addEventListener("change", updateEpisodes);
</script>