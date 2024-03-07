let btn = document.querySelector('.area-restrita')
let form = document.querySelector('.restrita');

btn.addEventListener('click', function() {
    if(form.style.display != 'flex'){
    form.style.display = 'flex';
    form.style.flexDirection ='column';
    return;
    }
    form.style.display = 'none'
});