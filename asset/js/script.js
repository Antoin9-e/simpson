const modal = document.getElementById("modalContent");
const openModalBtn = document.getElementById("modal");

console.log("script loaded");
console.log(openModalBtn);

openModalBtn.addEventListener("click", () => {
  console.log("click");
  modal.classList.toggle("hidden");
});

const resetBtn = document.getElementById("resetBtn");

resetBtn.addEventListener("click", () => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "traitement/session.php", true);
  xhr.send();

  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log("Session PHP supprimée avec succès.");
      window.location.reload(); // recharge la page
    } else {
      console.error("Erreur lors de la suppression de la session PHP.");
    }
  };
});
