#include <iostream>
using namespace std;

int main() {

    string first_name;
    string last_name;
    int age;
    string town;

    cin >> first_name >> last_name >> age >> town;

    cout << "You are " << first_name << " " << last_name << ", a " << age << "-years old person from " << town << "." << endl;


    return 0;
}
