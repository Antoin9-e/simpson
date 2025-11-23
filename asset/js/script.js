const modal = document.getElementById('modalContent');
const openModalBtn = document.getElementById('modal');
console.log("script loaded");
console.log(openModalBtn);

openModalBtn.addEventListener("click", () => {
  
   console.log("click");
    modal.classList.toggle("hidden");                                   
});
