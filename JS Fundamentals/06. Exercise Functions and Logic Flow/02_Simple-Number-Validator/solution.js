function validate() {
    let btn = document.querySelector('button');
    let weight = [2, 4, 8, 5, 10, 9, 7, 3, 6];
    let responseElement = document.getElementById('response');

    btn.addEventListener('click',() => {
        let number = document.querySelector('input').value;
        let lastDigit = Number(number[9]);
        let remainder = getRemainder(number);

        if (remainder === 10){
            remainder = 0;
        }

        console.log(remainder);
        console.log(lastDigit);
        if (remainder === lastDigit){
            responseElement.textContent = 'This number is Valid!';
        }else {
            responseElement.textContent = 'This number is NOT Valid!';
        }

    });

    function getRemainder(number) {
        let sum = 0;

        for (let i = 0; i < 9; i++){
            sum += Number(number[i]) * weight[i];
        }

        return sum % 11;
    }
}