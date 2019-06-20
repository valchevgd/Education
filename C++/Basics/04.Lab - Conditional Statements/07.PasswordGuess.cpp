#include <iostream>

using namespace std;

int main()
{
    string password = "s3cr3t!P@ssw0rd";

    string input;

    cin >> input;

    if (password == input)
    {
        cout << "Welcome\n";
    } else
    {
        cout << "Wrong password!\n";
    }
    
    return 0;
}
