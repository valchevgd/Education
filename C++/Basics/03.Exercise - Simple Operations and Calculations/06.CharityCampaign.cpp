#include <iostream>

using namespace std;

int main() {

    int days, cookesr, cakePerDayPerCook, wafersPerDayPerCook, pancakePerDayPerCook;

    cin >> days >> cookesr >> cakePerDayPerCook >> wafersPerDayPerCook >> pancakePerDayPerCook;

    double totalMoney = (cakePerDayPerCook * cookesr * days * 45)
                      + (wafersPerDayPerCook * cookesr * days * 5.8)
                      + (pancakePerDayPerCook * cookesr * days * 3.2);

    totalMoney -= totalMoney / 8;

    cout.setf(ios::fixed);
    cout.precision(2);

    cout << totalMoney << endl;

    return 0;
}
