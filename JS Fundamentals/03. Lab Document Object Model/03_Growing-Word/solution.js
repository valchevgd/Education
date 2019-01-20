function solve() {
    let button = document.getElementsByTagName('button')[0];
    let clicks = 1;

    button.addEventListener('click', () => {
        let el = document.getElementsByTagName('p')[2];
        let style = window.getComputedStyle(el, null).getPropertyValue('font-size');
        let fontSize = parseFloat(style);

        if (fontSize === 0){
            el.style.color = 'blue';
        }else{
            let color = window.getComputedStyle(el, null).getPropertyValue('color');

            if (color === 'rgb(0, 0, 255)'){
                el.style.color = 'green';
            }else if (color === 'rgb(0, 128, 0)'){
                el.style.color = 'red';
            }else{
                el.style.color = 'blue';
            }
        }
        el.style.fontSize = (clicks * 2) + 'px';

        clicks++;
    });
}