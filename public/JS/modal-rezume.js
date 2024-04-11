const rezume = document.getElementById("rezume-id"); //получаем кнопку регистрации
const rezumeWindow = document.getElementsByClassName("form-rezume")[0]; // получаем окно регистрации
const sslkainWindow = document.getElementsByClassName("form-sslka")[0]; // получаем окно логина
const sslka = document.getElementById("sslka-id");//получаем кнопку входа

rezume.addEventListener("click", function() { //создаём событие при клике
    rezumeWindow.style.display = "block"; // меняем свойство display на block
    sslkainWindow.style.display = "none"; // меняем свойство display на none
});

sslka.addEventListener("click", function() { //создаем событие  при клике
    sslkainWindow.style.display = "block"; // меняем свойство display на block
    rezumeWindow.style.display = "none"; // меняем свойство display на none
});