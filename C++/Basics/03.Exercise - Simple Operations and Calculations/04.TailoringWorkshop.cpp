#include <iostream>
using namespace std;

int main() {

    int countOfTables;
    double tablesLength, tablesWidth;

    cin >> countOfTables >> tablesLength >> tablesWidth;

    double coverArea = (tablesLength + 0.6) * (tablesWidth + 0.6);
    double karoArea = (tablesLength / 2) * (tablesLength / 2);

    double pricePerCoverInUsd = coverArea * 7;
    double pricePerKaroInUsd = karoArea * 9;

    double totalPriceInUsd = (pricePerCoverInUsd * countOfTables) + (pricePerKaroInUsd * countOfTables);
    double priceInLeva = totalPriceInUsd * 1.85;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << totalPriceInUsd << " USD" << endl
         << priceInLeva << " BGN" << endl;

    return 0;
}
