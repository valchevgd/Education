function solve() {
    Array.from(document.getElementsByTagName('button')).forEach((btn) => {
        btn.addEventListener('click', pushButton)
    });

    let separators = ['+', '-', '/', '*'];

    function pushButton(e) {
        let clickedButton = e.target.textContent;
        let expressionElement = document.getElementById('expressionOutput');
        let resultElement = document.getElementById('resultOutput');

        if (clickedButton === 'Clear') {
            expressionElement.textContent = '';
            resultElement.textContent = '';
        } else if (clickedButton === '=') {
            let parts = expressionElement.textContent.trim().split(' ');
            if (parts.length < 3) {
                resultElement.textContent = 'NaN';
            } else {
                let leftOperand = parts[0];
                let rightOperand = parts[2];
                let operator = parts[1];

                let result = 0;

                switch (operator) {
                    case '+':
                        result = +leftOperand + +rightOperand;
                        break;
                    case '-':
                        result = +leftOperand - +rightOperand;
                        break;
                    case '*':
                        result = +leftOperand * +rightOperand;
                        break;
                    case '/':
                        result = +leftOperand / +rightOperand;
                        break;
                }

                resultElement.textContent = result.toString();
            }
        } else {
            if (separators.includes(clickedButton)) {
                expressionElement.textContent += ` ${clickedButton} `;
            } else {
                expressionElement.textContent += clickedButton;
            }

        }


    }
}