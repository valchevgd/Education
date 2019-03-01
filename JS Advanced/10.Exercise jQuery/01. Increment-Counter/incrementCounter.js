function increment(selector) {

    (function () {

        let textArea = $('<textarea>');
        textArea.addClass('counter');
        textArea.val(0);
        textArea.attr('disabled', true);

        let incrementBtn = $('<button>Increment</button>');
        incrementBtn.addClass('btn');
        incrementBtn.attr('id', 'incrementBtn');

        let addBtn = $('<button>Add</button>');
        addBtn.addClass('btn');
        addBtn.attr('id', 'addBtn');

        let list = $('<ul>');
        list.addClass('results');

        $(incrementBtn).on('click', function () {
            textArea.val(Number(textArea.val()) + 1);
        });
        
        $(addBtn).on('click', function () {
            let li = $(`<li>${textArea.val()}</li>`);
            li.appendTo(list);
        });

        let fragment = document.createDocumentFragment();

        textArea.appendTo(fragment);
        incrementBtn.appendTo(fragment);
        addBtn.appendTo(fragment);
        list.appendTo(fragment);

        $(selector).append(fragment);
    })();
}
