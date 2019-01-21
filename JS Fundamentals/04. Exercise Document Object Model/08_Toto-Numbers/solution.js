function solve() {
    let btn = document.getElementsByTagName('button')[0];

    btn.addEventListener('click', () => {

       let numbersElement = document.getElementsByTagName('input')[0];
       let numbers = numbersElement.value;

       let split = numbers.split(' ');

       if (split.length === 6){
           let inRange = true;

           split.forEach((n) => {
               if (n < 1 || n > 49){
                   inRange = false;
               }
           });

           if (inRange){
               let allNumbersDiv = document.getElementById('allNumbers');

               for (let i = 1; i <= 49; i++){
                   let divElement = document.createElement('div');
                   divElement.setAttribute('class', 'numbers');
                   divElement.textContent = i;
                   if (split.includes(i.toString())){
                       console.log('Here');
                       divElement.style.background = 'orange';
                   }
                   allNumbersDiv.appendChild(divElement);
               }

               numbersElement.disabled = true;
               btn.disabled = true;
           }
       }
    });
}