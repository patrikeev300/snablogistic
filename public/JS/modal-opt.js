const optTwo = document.getElementById('modal-opt'); //получаем модальное окно со входом
const openModaloptTwo = document.getElementById("open-modal-opt"); //открытое модальное окно со входом
const closeModaloptTwo = document.getElementById("close-opt"); //получаем кнопку для закрытия модального окна со входом

openModaloptTwo.addEventListener("click", function() { //создаём событие при клике
    optTwo.style.display = "block"; // меняем свойство display на block
});

closeModaloptTwo.addEventListener("click", function() { //создаём событие при клике
    optTwo.style.display = "none"; // скрываем модальое окно со входом
});
