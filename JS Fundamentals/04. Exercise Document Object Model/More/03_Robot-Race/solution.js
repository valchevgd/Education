function solve() {
    let btn = document.getElementsByTagName('button')[0];
    let span = document.getElementsByTagName('span')[0];
    let softuni = document.getElementById('softuni');
    let google = document.getElementById('google');
    let facebook = document.getElementById('facebook');
    let softUniMargin = 0;
    let googleMargin = 0;
    let facebookMargin = 0;
    let winner = false;

    btn.addEventListener('click', () => {
        let robotName = document.getElementsByTagName('input')[0].value;
        let move = document.getElementsByTagName('input')[1].value.split(' ');
        let distance = move[1];
        let destination = move[0];
        let resultSpan = '';

        if (robotName === 'softuni') {
            if (destination === 'forward' || destination === 'backward') {
                softUniMargin += Number(distance);
            }
            if (softUniMargin > 80) {
                resultSpan = `${robotName} can\'t move so forward.`;
            } else if (softUniMargin < 0) {
                resultSpan = `${robotName} can\'t move so backward`;
            } else if (softUniMargin === 80) {
                if (winner) {
                    resultSpan = `${robotName.toUpperCase()} FINISHED SECOND`;
                } else {
                    resultSpan = `${robotName.toUpperCase()} WIN THE RACE!`;
                    winner = true
                }
            } else {

                if (destination === 'forward') {
                    resultSpan = `${robotName} move forward ${distance}`;
                } else if (destination === 'backward'){
                    resultSpan = `${robotName} was distracted and he got behind with ${distance} meters.`
                }
            }

            softuni.style.marginLeft = `${softUniMargin}%`;
        } else if (robotName === 'google') {
            if (destination === 'forward' || destination === 'backward') {
                googleMargin += Number(distance);
            }
            if (googleMargin > 80) {
                resultSpan = `${robotName} can\'t move so forward.`;
            } else if (googleMargin < 0) {
                resultSpan = `${robotName} can\'t move so backward`;
            } else if (googleMargin === 80) {
                if (winner) {
                    resultSpan = `${robotName.toUpperCase()} FINISHED SECOND`;
                } else {
                    resultSpan = `${robotName.toUpperCase()} WIN THE RACE!`;
                    winner = true
                }
            } else {
                if (destination === 'forward') {
                    resultSpan = `${robotName} move forward ${distance}`;
                } else if (destination === 'backward'){
                    resultSpan = `${robotName} was distracted and he got behind with ${distance} meters.`

                }
            }
            google.style.marginLeft = `${googleMargin}%`;
        }else if (robotName === 'facebook') {
            if (destination === 'forward' || destination === 'backward') {
                facebookMargin += Number(distance);
            }
            if (facebookMargin > 80) {
                resultSpan = `${robotName} can\'t move so forward.`;
            } else if (facebookMargin < 0) {
                resultSpan = `${robotName} can\'t move so backward`;
            } else if (facebookMargin === 80) {
                if (winner) {
                    resultSpan = `${robotName.toUpperCase()} FINISHED SECOND`;
                } else {
                    resultSpan = `${robotName.toUpperCase()} WIN THE RACE!`;
                    winner = true;
                }
            } else {
                if (destination === 'forward') {
                    resultSpan = `${robotName} move forward ${distance}`;
                } else if (destination === 'backward'){
                    resultSpan = `${robotName} was distracted and he got behind with ${distance} meters.`
                }
            }

            facebook.style.marginLeft = `${facebookMargin}%`;
        }
        span.textContent = resultSpan;

        document.getElementsByTagName('input')[0].value = '';
        document.getElementsByTagName('input')[1].value = '';
    })
}
	