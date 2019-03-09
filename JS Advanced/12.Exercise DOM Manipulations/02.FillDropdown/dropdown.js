function addItem() {
    let $newText = $('#newItemText');
    let $newValue = $('#newItemValue');

    let $select = $('#menu');
    let $option = $(`<option value="${$newValue.val()}">${$newText.val()}</option>`);
    $select.append($option);

    $newText.val('');
    $newValue.val('');
}