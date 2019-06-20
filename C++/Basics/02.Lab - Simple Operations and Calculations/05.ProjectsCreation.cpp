#include <iostream>
using namespace std;

int main () {

    string architectName;
    int countOfProjects;

    cin >> architectName >> countOfProjects;

    int hoursNeeded = countOfProjects * 3;

    cout << "The architect " << architectName << " will need " << hoursNeeded << " hours to complete " << countOfProjects << " project/s." << endl;

    return 0;
}
