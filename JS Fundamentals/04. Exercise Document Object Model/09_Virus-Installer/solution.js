function solve() {
    let nextBtn = document.getElementsByTagName('button')[0];
    let cancelBtn = document.getElementsByTagName('button')[1];
    let steps = [];

    cancelBtn.addEventListener('click', () => {
        let mainElement = document.getElementById('exercise');
        mainElement.style.display = 'none';
    });

    nextBtn.addEventListener('click', () => {
        let firstStep = document.getElementById('firstStep');
        let secondStep = document.getElementById('secondStep');
        let thirdStep = document.getElementById('thirdStep');

        if(!steps.includes('firstStep')){
            let content = document.getElementById('content');
            content.style.background = 'none';
            firstStep.style.display = 'inline-block';

            nextBtn.disabled = true;

            let license = document.getElementsByTagName('input')[0];
            license.addEventListener('click', () => {
                nextBtn.disabled = false;
            });

            steps.push('firstStep')
        }else if(!steps.includes('secondStep')){
            firstStep.style.display = 'none';
            secondStep.style.display = 'inline-block';
            nextBtn.style.display = 'none';

            setTimeout(() => {
                nextBtn.style.display = 'inline-block';
            }, 3000);

            steps.push('secondStep')
        }else {
            secondStep.style.display = 'none';
            thirdStep.style.display = 'inline-block';
            nextBtn.style.display = 'none';
            cancelBtn.textContent = 'Finish';
        }
    });
}