
new Splide(
    '.splide',
    {
        type   : 'loop',
        perPage: 1,
        pagination: false
    }
).mount();

let prevSelector = '.splide__arrow--prev';
let nextSelector = '.splide__arrow--next';
let slideCounter = document.querySelector('.count')

const calculateCounter = (operator) => {
    let num = parseInt(slideCounter.innerHTML)
    if(operator === '+') {
        num++
    }
    if(operator === '-') {
        num--
    }
    if(num < 1) {
        num = 5
    }
    if(num > 5) {
        num = 1
    }

    slideCounter.innerHTML = `0${num}`
}



document.querySelector('.slider-btn__prev').onclick = () => {
    document.querySelector(prevSelector).click()
    calculateCounter('-')
}

document.querySelector('.slider-btn__next').onclick = () => {
    document.querySelector(nextSelector).click()
    calculateCounter('+')
}

Fancybox.bind("[data-fancybox]", {});

let elem = document.getElementById('phone');
const maskOptions = {
    mask: '+{7}(000)000-00-00'
};
const mask = IMask(elem, maskOptions);


let ancors = document.querySelectorAll('.header-menu a')
ancors.forEach(ancor => {
    ancor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});





const mobMenu = document.querySelector('.header-menu-block');
const menuBtn = document.querySelector('.menu-btn');

function toggleMenu(mobMenu) {
    if (mobMenu.classList.contains('menu--active')) {
        mobMenu.classList.remove('menu--active');
        mobMenu.style.height = 0;
    } else {
    mobMenu.classList.add('menu--active');
    mobMenu.style.height = document.documentElement.clientHeight + 'px';
    }
}

document.querySelector('.menu-btn').onclick = () => {
    toggleMenu(mobMenu)
}

document.querySelector('.close-btn').onclick = () => {
    toggleMenu(mobMenu)
}

let mobileAncors = document.querySelectorAll('.header-menu-block ul li a');
mobileAncors.forEach(ancor => {
    ancor.addEventListener('click', function (e) {
        e.preventDefault();
        toggleMenu(mobMenu)
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let sendBtn = document.querySelector('.send-btn')

const sendMessage = async (dataObj, inputBlock, SuccessBlock, sendBtn) => {
    let div = document.createElement('div')
    div.className = 'await-block'
    let img = document.createElement('img')
    img.className = 'await-img'
    img.src = 'assets/img/icons/await.gif'
    div.appendChild(img)
    inputBlock.appendChild(div)
    sendBtn.remove()
    let {data} = await axios.post('/api/telegram', dataObj)
    if(data.message === 'ok') {
        inputBlock.remove()
        SuccessBlock.style.display = 'flex';
    }
}

sendBtn.onclick = (e) => {
    e.preventDefault()
    let name = document.getElementById('name')
    let phone = document.getElementById('phone')
    let message = document.getElementById('message')
    let flag = 0;

    let errors = document.querySelectorAll('.err-text');

    errors.forEach(err => {
        err.classList.add('hidden')
    });

    if(name.value.length < 3) {
        name.parentNode.querySelector('.err-text').classList.remove('hidden')
        flag++
    }

    if(phone.value.length < 16) {
        phone.parentNode.querySelector('.err-text').classList.remove('hidden')
        flag++
    }


    if(flag < 1) {
        let obj = {
            name: name.value,
            phone: phone.value,
            message: message.value
        }

        const listSelector = document.querySelector('.recall-box__input')
        const successSelector = document.querySelector('.recall-box__success')
        sendMessage(obj, listSelector, successSelector, sendBtn)
    }
}



document.querySelector('.recall-box__success .form-btn').onclick = () => {
    Fancybox.close();
}
