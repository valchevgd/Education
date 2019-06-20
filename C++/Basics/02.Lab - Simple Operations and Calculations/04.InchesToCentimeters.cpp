#include <iostream>
using namespace std;

int main() {

    double cm_to_inch = 2.54;
    double inches;

    cin >> inches;

    double cm = inches * cm_to_inch;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << cm;

    return 0;
}
