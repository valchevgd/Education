function attachGradientEvents(){

    document.getElementById('gradient-box').addEventListener('mousemove', getPosition);

    function getPosition(e) {
        let width = document.getElementById('gradient-box').offsetWidth;

        let clickX = e.offsetX;
        let result = Math.round((clickX / width) * 100);

        let resultDiv = document.getElementById('result');
        resultDiv.textContent = result + '%';
    }
}