function solve(worker) {

    if (worker.handsShaking === true){
        let alcoholNeeded = worker.weight * worker.experience * 0.1;
        worker.bloodAlcoholLevel += alcoholNeeded;
        worker.handsShaking = false;
    }

    return worker;
}

console.log(solve({
    weight: 80,
    experience: 1,
    bloodAlcoholLevel: 0,
    handsShaking: true
}));