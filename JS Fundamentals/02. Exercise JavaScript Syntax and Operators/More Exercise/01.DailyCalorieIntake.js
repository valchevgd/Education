function solve(personData, workouts) {

    let personGender = personData[0];
    let personWeight = personData[1];
    let personHeight = personData[2];
    let personAge = personData[3];
    let caloriesPerDay = 0;

    if (personGender === 'm'){
        caloriesPerDay = 66 + 13.8 * personWeight + 5 * personHeight - 6.8 * personAge;
    }else {
        caloriesPerDay = 655 + 9.7 * personWeight + 1.85 * personHeight - 4.7 * personAge;
    }

    let totalCalories = caloriesPerDay * 1.55;

    console.log(`My calorie intake is ${Math.round(totalCalories)}`);
}

solve(['m', 95, 188, 32], 7);