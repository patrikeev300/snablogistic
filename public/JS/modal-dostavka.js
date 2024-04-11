const samovvs = document.getElementById("samovvs"); //получаем кнопку регистрации
const samovvsWindow = document.getElementsByClassName("form-samovvs")[0]; // получаем окно регистрации
const dostavkaWindow = document.getElementsByClassName("form-dostavka")[0]; // получаем окно логина
const dostavka = document.getElementById("dostavka");//получаем кнопку входа

samovvs.addEventListener("click", function() { //создаём событие при клике
    samovvsWindow.style.display = "block"; // меняем свойство display на block
    dostavkaWindow.style.display = "none"; // меняем свойство display на none
});

dostavka.addEventListener("click", function() { //создаем событие  при клике
    dostavkaWindow.style.display = "block"; // меняем свойство display на block
    samovvsWindow.style.display = "none"; // меняем свойство display на none
});