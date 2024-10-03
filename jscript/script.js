// Fase di preparazione
const form = document.querySelector('form');
const selectCarpark = document.getElementById('h-carpark');
const selectVote = document.getElementById('h-vote');

// Fase di elaborazione
form.addEventListener("submit", function (e) {
  if (!selectCarpark.value && !selectVote.value) e.preventDefault();
})