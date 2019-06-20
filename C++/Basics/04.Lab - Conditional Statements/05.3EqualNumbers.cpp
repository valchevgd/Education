#include <iostream>
using namespace std;

int main() {

    double numOne, numTwo, numThree;

    cin >> numOne >> numTwo >> numThree;

    if (numOne == numTwo && numTwo == numThree) {

        cout << "yes" << endl;
    } else {

        cout << "no" << endl;
    }

    return 0;
}
