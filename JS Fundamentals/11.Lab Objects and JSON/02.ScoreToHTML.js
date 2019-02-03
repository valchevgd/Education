function solve(input) {
    let array = JSON.parse(input);

    console.log('<table>');
    console.log('<tr><th>name</th><th>score</th></tr>');

    for (let player of array) {
        let name = escapeHTML(player.name);
        console.log(`<tr><td>${name}</td><td>${player.score}</td></tr>`);
    }

    console.log('</table>');

    function escapeHTML(str){
        const obj = {'<':'&lt;', '>':'&gt;', "'":'&#39;', '"':'&quot;', '&':'&amp;'};
        return str.split('').map( x => obj.hasOwnProperty(x) ? obj[x] : x ).join('');
    }
}

solve('[{"name":"Pesho","score":479},{"name":"Gosho","score":205}]');