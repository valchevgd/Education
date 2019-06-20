#include <iostream>
using namespace std;

int main() {

    int dogs;
    int otherAnimals;

    cin >> dogs >> otherAnimals;

    double priceForDogsFood = dogs * 2.50;
    double priceForOtherAnimalsFood = otherAnimals * 4.00;
    double totalPrice = priceForDogsFood + priceForOtherAnimalsFood;

    cout.setf(ios::fixed);
    cout.precision(2);
    cout << totalPrice << " lv." << endl;

    return 0;
}
