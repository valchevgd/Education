#include <iostream>
#include <cmath>

using namespace std;

int main() {

    double hallLenght, hallWidth, boxSiza;

    cin >> hallLenght >> hallWidth >> boxSiza;

    double hallAreaCm = (hallLenght * 100) * (hallWidth * 100);
    double boxAreaCm = (boxSiza * 100) * (boxSiza * 100);
    double benchSizeCm = hallAreaCm / 10;
    double freeSpace = hallAreaCm - boxAreaCm - benchSizeCm;

    double dancers = floor(freeSpace / (7000 + 40));

    cout << dancers;


    return 0;
}
