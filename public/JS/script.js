
// slider news
let offset = 0;
const slider = document.querySelector(".slider-boxs");
document.querySelector('.next').addEventListener('click', function (){
    offset += 530;
    if(offset > 1300){
        offset = 0;
    }
    slider.style.left = -offset + 'px';
})

document.querySelector('.back').addEventListener('click', function (){
    offset -= 530;
    if(offset < 0){
        offset = 1060;
    }
    slider.style.left = -offset + 'px';
})

// slider news

// slider otzv

let offsetOne = 0;
const sliderOne = document.querySelector(".slider-boxs-two");
document.querySelector('.next-one').addEventListener('click', function (){
    offsetOne += 560;
    if(offsetOne > 1500){
        offsetOne = 0;
    }
    sliderOne.style.left = -offsetOne + 'px';
})

document.querySelector('.back-one').addEventListener('click', function (){
    offsetOne -= 560;
    if(offsetOne < 0){
        offsetOne = 1120;
    }
    sliderOne.style.left = -offsetOne + 'px';
})

// slider otzv