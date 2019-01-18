function solve(text) {

    let numbers = text.match(/\d+/g);

    for (let i = 0; i < numbers.length; i++) {

        let number = +numbers[i] % 10;

        switch (number) {
            case 1:
                numbers[i] = numbers[i] + 'st';
                break;
            case 2:
                numbers[i] = numbers[i] + 'nd';
                break;
            case 3:
                numbers[i] = numbers[i] + 'rd';
                break;
            default:
                numbers[i] = numbers[i] + 'th';
                break;
        }

        console.log(numbers[i]);
    }
}

solve('     1 2 3    23  43, 6 ...5.....77');