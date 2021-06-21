window.addEventListener('DOMContentLoaded', function(){
    'use strict';

    // пример тайминга. Чтото будет делаться через определеенный промежуток времени
    let exemple = document.querySelector('.exemple'),
        main = document.querySelector('.main');
    let pos = 0;
    
    setInterval(animation, 10);
    
    function animation() {
        if (pos == 350) {
            clearInterval();
        } else {
            pos++;
            exemple.style.top = pos + 'px';
            exemple.style.left = pos + 'px';
        }
    }
});
