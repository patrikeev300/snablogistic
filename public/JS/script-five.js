//  slider kollegi

let offsetTwo = 0;
const sliderTwo = document.querySelector(".slider-boxs-five");
document.querySelector('.next-five').addEventListener('click', function (){
    offsetTwo += 560;
    if(offsetTwo > 1500){
        offsetTwo = 0;
    }
    sliderTwo.style.left = -offsetTwo + 'px';
    console.log(offsetTwo);
})

document.querySelector('.back-five').addEventListener('click', function (){
    offsetTwo -= 560;
    if(offsetTwo < 0){
        offsetTwo = 1120;
    }
    sliderTwo.style.left = -offsetTwo + 'px';
})

// slider kollegi