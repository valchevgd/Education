#include <iostream>
using namespace std;

int main() {

    double input;

    cin >> input;

    double totalPrice = input * 7.61;
    double discount = totalPrice * 0.18;
    double priceToBePayed = totalPrice - discount;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << "The final price is: " << priceToBePayed << " lv." << endl << "The discount is: " << discount << " lv." << endl;

    return 0;
}
