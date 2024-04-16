const menu = document.getElementById('menu')
const ul = document.getElementById('itens_nav')


menu.addEventListener('click', ()=>{

    console.log('chegou aqui')

    if(ul.style.display == ''){

        ul.style.display = 'flex';

    }else{

        ul.style.display = '';

    }



})