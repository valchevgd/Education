function solve(input) {
    let array = JSON.parse(input);
    let objectKeys = Object.keys(array[0]);


    console.log('<table>');
    let tableHead = '<tr>';
    for (let key of objectKeys){
        tableHead += `<th>${key}</th>`;
    }
    console.log(tableHead + '</tr>');

    for (let obj of array) {
        let tableRow = '<tr>';

        for (let key of objectKeys){
            let value = obj[key];

            if (!Number(value)){
                value = escapeHTML(value);
            }
            tableRow += `<td>${value}</td>`;
        }

        console.log(tableRow + '</tr>');
    }

    console.log('</table>');

    function escapeHTML(str){
        const obj = {'<':'&lt;', '>':'&gt;', "'":'&#39;', '"':'&quot;', '&':'&amp;'};
        return str.split('').map( x => obj.hasOwnProperty(x) ? obj[x] : x ).join('');
    }
}

solve('[{"Name":"Tomatoes & Chips","Price":2.35},{"Name":"J&B Chocolate","Price":0.96}]');