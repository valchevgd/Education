function solve(examPoints, homeworkCompleted, totalHomework){
    let pointsPercent = ((examPoints / 400) * 0.9) * 100;
    let homeworkBonus = (homeworkCompleted / totalHomework) * 10;
    let totalPoints = pointsPercent + homeworkBonus;

    let examResult = 3 + 2 * (totalPoints - 100 / 5) / (100 / 2);

    if (examPoints === 400 || examResult >= 6){
        examResult = 6;
    } else if (examResult < 3){
        examResult = 2;
    }
    console.log(examResult.toFixed(2));
}

solve(267, 5, 5);