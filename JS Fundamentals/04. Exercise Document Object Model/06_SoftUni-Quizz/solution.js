function solve() {
    Array.from(document.getElementsByTagName('button')).forEach((btn) => {
        btn.addEventListener('click', (e) => {showMore(e)});
    });

    let answers = [];

    function showMore(e) {
        let btn = e.target;

        let parent = btn.parentElement;

        let radioName = parent.children[4].name;
        answers.push(document.querySelector(`input[name="${radioName}"]:checked`).value);

        let nextSection = document.getElementsByClassName('hidden')[0];

        if (nextSection){
            nextSection.removeAttribute('class');
        }else {
            getResults();
        }
    }

    function getResults() {
        let correctAnswers = 0;
        
        if (answers.includes('2013')) {
            correctAnswers++;
        }
        if (answers.includes('Pesho')) {
            correctAnswers++;
        }
        if (answers.includes('Nakov')){
            correctAnswers++;
        }

        let resultElement = document.getElementById('result');

        if (correctAnswers === 3){
            resultElement.textContent = 'You are recognized as top SoftUni fan!';
        }else {
            resultElement.textContent = `You have ${correctAnswers} right answers`
        }
    }
}