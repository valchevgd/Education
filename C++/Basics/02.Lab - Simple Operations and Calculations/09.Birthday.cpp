#include <iostream>
using namespace std;

int main() {

    int lenghtInCm;
    int widthInCm;
    int heightInCm;
    double percent;

    cin >> lenghtInCm >> widthInCm >> heightInCm >> percent;

    double totalSpace = (lenghtInCm * widthInCm * heightInCm) * 0.001;
    double percentForWater = 1 - (percent * 0.01);
    double spaceforWater = totalSpace * percentForWater;

    cout.setf(ios::fixed);
    cout.precision(3);

    cout << spaceforWater << endl;

    return 0;
}
