function subtract() {
    let firstNum = Number($('#firstNumber').val());
    let secondNum = Number($('#secondNumber').val());

    $('#result').text(firstNum - secondNum);
}