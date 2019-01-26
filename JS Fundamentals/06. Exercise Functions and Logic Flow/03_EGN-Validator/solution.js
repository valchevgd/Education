function validate() {
    let btn = document.querySelector('button');
    let pElement = document.getElementById('egn');
    let weight = [2, 4, 8, 5, 10, 9, 7, 3, 6];

    btn.addEventListener('click', () => {
        let yearElement = document.getElementById('year');
        let monthElement = document.getElementById('month');
        let dayElement = document.getElementById('date');
        let genderElement = document.querySelector('input[name="gender"]:checked');
        let codeElement = document.getElementById('region');
        let monthSelected = monthElement;

        let year = yearElement.value % 100;
        let month = ('0' + monthSelected.selectedIndex).slice(-2);
        let day = ('0' + dayElement.value).slice(-2);
        let gender = genderElement.value;
        let code = codeElement.value;


        let egn = '';
        if (year < 10) {
            egn += '0' + year;
        } else {
            egn += year.toString();
        }
        console.log(egn);
        egn += month;
        console.log(egn);
        egn += day;
        console.log(egn);
        if (Number(code) > 99) {
            egn += code.substring(0, 2)
        } else {
            egn += code;
        }
        if (gender === 'Male') {
            egn += '2';
        } else {
            egn += '1';
        }
        egn += getRemainder(egn);

        pElement.textContent = `Your EGN is: ${egn}`;

        yearElement.value = '';
        monthElement.selected = false;
        dayElement.value = '';
        genderElement.checked = false;
        codeElement.value = '';


    });

    function getRemainder(number) {
        let sum = 0;

        for (let i = 0; i < 9; i++) {
            sum += Number(number[i]) * weight[i];
        }

        let remainder = sum % 11;

        console.log(remainder);
        if (remainder === 10) {
            return 0;
        } else {
            return remainder;
        }
    }
}