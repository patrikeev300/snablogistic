const modalVakTwo = document.getElementById('modal-vak-two'); //получаем модальное окно со входом
const openModalVakTwo = document.getElementById("open-modal-vak-two"); //открытое модальное окно со входом
const closeModalVakTwo = document.getElementById("close-vak-two"); //получаем кнопку для закрытия модального окна со входом

openModalVakTwo.addEventListener("click", function() { //создаём событие при клике
    modalVak.style.display = "block"; // меняем свойство display на block
});

closeModalVakTwo.addEventListener("click", function() { //создаём событие при клике
    modalVak.style.display = "none"; // скрываем модальое окно со входом
});
