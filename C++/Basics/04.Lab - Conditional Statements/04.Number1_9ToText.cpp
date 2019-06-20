#include <iostream>

using namespace std;

int main() {

    int num;

    cin >> num;

    switch(num) {

    case 1:
        cout << "one" << endl;
        break;

        default:
            cout << "number too big" << endl;
            break;

    }

    return 0;
}
