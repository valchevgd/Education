#include <iostream>
#include <cmath>
#define pi 3.14159265359

using namespace std;

int main() {

    double radian;

    cin >> radian;

    double degrees = radian * 180 / pi;

    cout << round(degrees) << endl;

    return 0;
}
