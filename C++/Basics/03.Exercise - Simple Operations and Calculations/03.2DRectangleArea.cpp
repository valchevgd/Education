#include <iostream>
#include <cmath>

using namespace std;

int main() {

    double x1, y1, x2, y2;

    cin >> x1 >> y1 >> x2 >> y2;

    double lenght = abs(x1 - x2);
    double width = abs(y1 - y2);

    double area = lenght * width;
    double perimeter = 2 * (lenght + width);

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << area << endl
         << perimeter << endl;

    return 0;
}
