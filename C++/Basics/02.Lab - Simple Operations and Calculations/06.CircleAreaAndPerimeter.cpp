#include <iostream>
#include <cmath>
#define pi 3.14159265359

using namespace std;

int main() {

    double radius;
    cin >> radius;

    double area = pi * radius * radius;
    double perimeter = 2 * pi * radius;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << area << endl << perimeter << endl;

    return 0;
}
