$(function(){
    let selectHeader = document.querySelectorAll('.categories__select__header');
    selectHeader.forEach(item=>{
        item.addEventListener('click',function () {
            this.parentElement.classList.toggle('active')
        })
    }
    )
});

$(function(){
    let selectHeader = document.querySelector('.katalog__search__burgher');
    let katalog = document.querySelector('.katalog__search');
    let katalogExit = document.querySelector('.exit__katalog__search');
    selectHeader.addEventListener('click',function () {
        //this.classList.toggle('active');
        katalog.classList.toggle('active');
        $('body').toggleClass('lock');
    });
    katalogExit.addEventListener('click',function () {
        //selectHeader.classList.toggle('active');
        katalog.classList.toggle('active');
        $('body').toggleClass('lock');
    });
});