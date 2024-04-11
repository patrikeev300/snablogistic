
const modal = document.getElementById('modal'); //получаем модальное окно со входом
const openModal = document.getElementById("open-modal"); //открытое модальное окно со входом
const closeModal = document.getElementById("close"); //получаем кнопку для закрытия модального окна со входом

openModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "block"; // меняем свойство display на block
});

closeModal.addEventListener("click", function() { //создаём событие при клике
    modal.style.display = "none"; // скрываем модальое окно со входом
});

