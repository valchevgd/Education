#include <iostream>

using namespace std;

int main() {

    double wiskeyPrice, beer, wine, rakia, wiskey;

    cin >> wiskeyPrice >> beer >> wine >> rakia >> wiskey;

    double moneyForWiskey = wiskeyPrice * wiskey;
    double rakiaPrice = wiskeyPrice / 2;
    double moneyForRakia = rakiaPrice * rakia;
    double moneyForWine = wine * (rakiaPrice - (rakiaPrice * 0.4));
    double moneyForBeer = beer * (rakiaPrice - (rakiaPrice * 0.8));

    double totalPrice = moneyForWiskey + moneyForRakia + moneyForWine + moneyForBeer;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << totalPrice << endl;

    return 0;
}
