function solve(name, age, weight, heightInCm){
    let bmi = Math.round(calculateBim(weight, heightInCm / 100));
    let status = getStatus(bmi);

    let patient = {
        name,
        personalInfo : {
            age,
            weight,
            height : heightInCm
        },
        BMI : bmi,
        status
    };

    if (patient.status === 'obese'){
        patient['recommendation'] = 'admission required';
    }

    return patient;


    function calculateBim(weight, height) {
        let bmi = weight / height ** 2;
        return bmi;
    }
    
    function getStatus(bmi) {
        if (bmi < 18.5){
            return 'underweight';
        }else if (bmi < 25){
            return 'normal';
        } else if (bmi < 30){
            return 'overweight';
        }else {
            return 'obese';
        }
    }
}

console.log(solve('Honey Boo Boo', 9, 57, 137));