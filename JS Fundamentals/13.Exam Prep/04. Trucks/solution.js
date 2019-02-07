function solve() {
    let buttons = document.getElementsByTagName('button');
    let outputElement = document.querySelector('textarea');
    let garage = [];
    let backupTires = [];

    let addTruckButton = buttons[0];
    addTruckButton.addEventListener('click', addTruck);

    let addTiresButton = buttons[1];
    addTiresButton.addEventListener('click', addTires);

    let workButton = buttons[2];
    workButton.addEventListener('click', work);

    let endOfShiftButton = buttons[3];
    endOfShiftButton.addEventListener('click', finishedShift);


    function addTruck() {
        let plateNumber = document.getElementById('newTruckPlateNumber').value;
        let tiresCondition = document.getElementById('newTruckTiresCondition').value
            .split(' ').map(Number);

        if (!garage.hasOwnProperty(plateNumber)){
            let truck = {
                'number': plateNumber,
                'tiresCondition' : tiresCondition,
                'traveledDistance' : 0
            };

            garage[plateNumber] = truck;

            addTruckInGarage(plateNumber);
        }

    }

    function addTires() {
        let tiresCondition = document.getElementById('newTiresCondition').value
            .split(' ').map(Number);

        backupTires.push(tiresCondition);

        addBackupTires(tiresCondition);
    }

    function work() {
        let plateNumber = document.getElementById('workPlateNumber').value;
        let distance = Number(document.getElementById('distance').value);

        let truck = garage[plateNumber];

        console.log(backupTires.length);

        if(tryToTravelDistance(truck, distance)){
           for (let i = 0; i < truck.tiresCondition.length; i++){
               truck.tiresCondition[i] -= distance / 1000;
           }
           truck.traveledDistance += distance;
       }else if (backupTires.length > 0) {
           let newTires = backupTires[0];
           if (tryToTravelDistance(truck, distance, newTires)){
               truck.tiresCondition = newTires;
               backupTires.shift();
               removeBackupTiresSet();
               for (let i = 0; i < truck.tiresCondition.length; i++){
                   truck.tiresCondition[i] -= distance / 1000;
               }
               truck.traveledDistance += distance;
           }
       }
    }

    function finishedShift() {
        for (let plate in garage){
            outputElement.value += `Truck ${garage[plate].number} has traveled ${garage[plate].traveledDistance}.\n`
        }

        outputElement.value += `You have ${backupTires.length} sets of tires left.\n`
    }

    function addTruckInGarage(plateNumber) {
        let divElement = document.createElement('div');
        divElement.setAttribute('class', 'truck');
        divElement.textContent = plateNumber;

        let outputArea = document.querySelector('section:nth-child(2) fieldset:nth-child(2) div');
        outputArea.appendChild(divElement);
    }

    function addBackupTires(tiresCondition) {
        let divElement = document.createElement('div');
        divElement.setAttribute('class', 'tireSet');
        divElement.textContent = tiresCondition.join(' ');

        let outputArea = document.querySelector('section:nth-child(2) fieldset:nth-child(1) div');
        outputArea.appendChild(divElement);
    }

    function tryToTravelDistance(truck, distance, tires) {
        let success = true;

        if (tires){
            console.log('here');
            tires.forEach(t => {
                if (t < distance / 1000){
                    success = false;
                }
            });
        } else {
            truck.tiresCondition.forEach(t => {
                if (t < distance / 1000){
                    success = false;
                }
            });
        }

        return success;
    }

    function removeBackupTiresSet() {
        let outputArea = document.querySelector('section:nth-child(2) fieldset:nth-child(1) div');
        outputArea.removeChild(outputArea.childNodes[0]);
    }
}