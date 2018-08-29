function solution(arr) {
    let numbers = arr.map(Number);
    let sorted = numbers.sort((a, b) => b - a);
    for (let i = 0; i < Math.min(3, sorted.length); i++){
        console.log(sorted[i]);
    }
}

solution(['10', '30'])