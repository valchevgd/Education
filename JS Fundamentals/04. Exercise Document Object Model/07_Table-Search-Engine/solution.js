function solve() {
    let searchBtn = document.getElementById('searchBtn');

    searchBtn.addEventListener('click', () => {
        let selectedRows = Array.from(document.getElementsByClassName('select'));

        if (selectedRows){
            selectedRows.forEach((r) => {
                r.removeAttribute('class')
            })
        }

        let searchElement = document.getElementById('searchField');

        let searchValue = searchElement.value;

        let allRows = Array.from(document.getElementsByTagName('tr'));


        allRows.forEach((r) => {
            if (r.textContent.toUpperCase().includes(searchValue.toUpperCase())){
                r.setAttribute('class','select');
                console.log(r);
            }
        });
        searchElement.value = '';
    })
}