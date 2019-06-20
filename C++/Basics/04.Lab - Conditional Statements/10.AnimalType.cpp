#include <iostream>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    string input;
    string output;

    cin >> input;

    if (input == "dog")
    {
        output = "mammal";
    } 
    else if (input == "crocodile" || input == "tortoise" || input == "snake")
    {
        output = "reptile";
    }
    else 
    {
        output = "unknown";
    }

    cout << output << endl;
    
    return 0;
}
