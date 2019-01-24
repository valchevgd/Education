function solve() {
    Array.from(document.getElementsByTagName('button')).forEach((btn) => {
        btn.addEventListener('click', action);
    });
    let clics = 0;
    let result = 0;
    function action(e) {
        let action = e.target.textContent;
        let number = clics === 0 ? Number(document.getElementsByTagName('input')[0].value) : result;
        let outputElement = document.getElementById('output');
        clics++;



       outputElement.textContent = getResult(action, number);

    }

    function getResult(action, number) {
        switch (action) {
            case 'Chop':
                result = number / 2;
                break;
            case 'Dice':
                result = Math.sqrt(number);
                break;
            case 'Spice':
                result = ++number;
                break;
            case 'Bake':
                result = number * 3;
                break;
            case 'Fillet':
                result = number - (number * 0.2);
                break;
        }

        return result;

    }
}
