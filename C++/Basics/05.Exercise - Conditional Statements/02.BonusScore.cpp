#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    int score;
    double bonus;
    bool even = score % 2 == 0;
    bool byFive = score % 10 == 5;

    cin >> score;

    if (score <= 100)
    {
        bonus = 5;
    }
    else if (score < 1000)
    {
        bonus = score * 0.2;
    }
    else
    {
        bonus = score * 0.1;
    }
    
    if (even)
    {
        bonus += 1;
    }
    
    if (byFive)
    {
        bonus += 2;
    }
    
    cout << bonus << endl;
    cout << bonus + score;

    return 0;
}
