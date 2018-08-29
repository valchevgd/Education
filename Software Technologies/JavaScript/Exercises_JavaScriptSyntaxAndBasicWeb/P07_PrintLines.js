function solution(array) {
    for (let i = 0; i < array.length; i++) {
        if (array[i] === "Stop") {
            break;
        }

        console.log(array[i]);
    }
}

solution(["Line 1",
    "Line 2",
    "Line 3",
    "Stop",
    "5"
])