function solve() {
    Array.from(document.getElementsByTagName('button')).forEach((btn) => {
        btn.addEventListener('click', (e) => {showMore(e)});
    });


    function showMore(e) {

        let btn = e.target;

        let parent = btn.parentElement;
        let unlock = parent.children[4].checked;
        let divToShow = parent.children[9];

        if (unlock){
            if (btn.textContent === 'Show more') {
                divToShow.style.display = 'inline-block';
                btn.textContent = 'Hide it';
            } else {
                divToShow.style.display = 'none';
                btn.textContent = 'Show more';
            }
        }

    }
} 