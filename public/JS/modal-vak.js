const modalVak = document.getElementById('modal-vak'); //получаем модальное окно со входом
const openModalVak = document.getElementById("open-modal-vak"); //открытое модальное окно со входом
const closeModalVak = document.getElementById("close-vak"); //получаем кнопку для закрытия модального окна со входом

openModalVak.addEventListener("click", function() { //создаём событие при клике
    modalVak.style.display = "block"; // меняем свойство display на block
});

closeModalVak.addEventListener("click", function() { //создаём событие при клике
    modalVak.style.display = "none"; // скрываем модальое окно со входом
});
