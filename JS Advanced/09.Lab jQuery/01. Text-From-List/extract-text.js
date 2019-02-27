function extractText() {
   let texts = $('li')
       .toArray()
       .map(x => x.textContent);

    $('#result').text(texts.join(', '))
}
