<div class="container mx-auto p-4">
    <h1 class="text-center">Tableau des punitions</h1>

    <div class="board flex flex-col md:flex-row md:w-[70%] mx-auto mt-4 border-4 border-amber-950 p-4 bg-green-900 rounded-lg text-center">
        
        <div class="p-2 md:w-[70%] flex flex-col items-center md:justify-start">
            <?php
            if (isset($_SESSION['phrase'])) {
                $phrase = htmlspecialchars($_SESSION['phrase']);
echo '<div id="punition-board" data-phrase="' . htmlspecialchars($phrase, ENT_QUOTES) . '"></div>';            } else {
                echo "<p class='text-white text-lg mb-4'>Aucune punition sélectionnée.</p>";
            }
            ?>
        </div>
        <div class="p-2 md:w-[25%] flex flex-col items-center md:justify-end">
            <?php
            if(isset($_SESSION['saisonChoisie']) && isset($_SESSION['episodeChoisi'])) {
                echo "<p class='text-white text-lg mb-4'>".htmlspecialchars($_SESSION['saisonChoisie']) .' : '. htmlspecialchars($_SESSION['episodeChoisi']) . "</p>";
            } else {
                echo "<p class='text-white text-lg mb-4'>Aucune punition sélectionnée.</p>";
            }
            ?>
        </div>
        <div class="p-2 md:w-[25%] flex justify-end">
        <img src="asset/images/BS.png" class="float-right ml-4 mt-10" alt="">
        </div>
    </div>
</div>

<script>
const board = document.getElementById('punition-board');
const phrase = board.dataset.phrase || "";

let count = 0;             
const maxLines = 8;        

const interval = setInterval(() => {
    if (count < maxLines) {
        const line = document.createElement('p');
        line.textContent = phrase;
        line.className = "text-white text-lg mb-1 text-left";
        board.appendChild(line);
        count++;
    } else {
        clearInterval(interval); 
    }
}, 1000);
</script>
