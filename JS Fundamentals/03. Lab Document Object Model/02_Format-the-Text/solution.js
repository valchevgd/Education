function solve(){

    let textElement = document.getElementById('input');
    let text = textElement.innerHTML;
    let splitText = text.split('.');


    let output = document.getElementById('output');

    for (let i = 0; i < splitText.length; i+= 3){

        let paragraph = document.createElement('p');
        let paragraphText = '';
        if (i + 4 <= splitText.length){
            paragraphText = splitText[i] +'.'+splitText[i+1]+'.'+splitText[i+2]+'.';
        }else if (i + 3 <= splitText.length){
            paragraphText = splitText[i] +'.'+splitText[i+1]+'.';
        }else{
            paragraphText = splitText[i] +'.';
        }

        let paragraphValue = document.createTextNode(paragraphText);
        paragraph.appendChild(paragraphValue);

        output.appendChild(paragraph);
    }

}
