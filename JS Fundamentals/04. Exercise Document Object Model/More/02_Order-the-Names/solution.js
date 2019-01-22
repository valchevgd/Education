function solve() {
    let registerButton = document.getElementsByTagName('button')[0];
    let alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S',
    'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    registerButton.addEventListener('click', () => {
        let name = document.getElementsByTagName('input')[0].value;
        let letter = name[0];
        let pos = 0;

        for (let i = 0; i < 26; i++){
            if (letter === alphabet[i]){
                pos = i;
                break;
            }
        }

        let liElement = document.getElementsByTagName('li')[pos];

        if (liElement.textContent){
            liElement.textContent += `, ${name}`;
        } else {
            liElement.textContent = name;
        }

        document.getElementsByTagName('input')[0].value = '';
    })
}
