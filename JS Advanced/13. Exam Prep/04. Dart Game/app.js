function dart(){

    let layers = ['firstLayer', 'secondLayer', 'thirdLayer', 'fourthLayer', 'fifthLayer', 'sixthLayer'];
    let tds = $('td:odd').toArray();
    let scoreboard = {};

    for (let i = 0; i < 6; i++) {
        scoreboard[layers[i]] = tds[i].innerHTML.split(' ')[0];
    }

    $('#playBoard div').on('click', (e) => {
        e.stopPropagation();

        let pointsScored = scoreboard[$(e.target).attr('id')];

        let turn = $('#turns p:even').text().split(' ')[2];

        $(`#${turn} p:first-child`).text(Number($(`#${turn} p:first`).text()) + Number(pointsScored));

       if (turn === 'Home'){
          $('#turns p:even').text('Turn on Away');
           $('#turns p:odd').text('Next is Home');
       }else {
           $('#turns p:even').text('Turn on Home');
           $('#turns p:odd').text('Next is Away');
       }

       if (Number($(`#${turn} p:first-child`).text()) >= 100){
           $('#playBoard div').off('click');

           if (turn === 'Home') {
               $('#home p:last-child').css('background', 'green');
               $('#away p:last-child').css('background', 'red');
           }else {
               $('#home p:last-child').css('background', 'red');
               $('#away p:last-child').css('background', 'green');
           }
       }

    })
}