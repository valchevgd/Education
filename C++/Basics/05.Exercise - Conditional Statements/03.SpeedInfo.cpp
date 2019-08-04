#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    double speed;
    string output;

    cin >> speed;

    if (speed <= 10)
    {
        output = "slow";
    }
    else if (speed <= 50)
    {
        output = "average";
    }
    else if (speed <= 150)
    {
        output = "fast";
    }
    else if (speed <= 1000)
    {
        output = "ultra fast";
    }
    else 
    {
        output = "extremely fast";
    }

    cout << output << endl;
    
    return 0;
}