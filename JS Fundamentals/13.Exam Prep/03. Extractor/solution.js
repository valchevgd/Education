function solve() {
    let extractButton = document.getElementsByTagName('button')[0];
    extractButton.addEventListener('click', extract);

    function extract() {
        let input = document.getElementsByTagName('textarea')[0].value;
        let outputElement = document.getElementsByTagName('textarea')[1];

        let charsToTake = input.match(/[0-9]+/g)[0];
        let allNeededChars = input.substr(charsToTake.length, parseInt(charsToTake));
        let separator = allNeededChars.split('').pop();
        let separateParts = allNeededChars.split(separator).filter(Boolean);
        let regEx = new RegExp(`[${separateParts[0]}]`, 'g');
        let text = separateParts[1];
        let textToBeSpaced = text.replace(regEx, '');
        let spacedText = textToBeSpaced.replace(/[#]/g, ' ');

        outputElement.value = spacedText;

    }
}