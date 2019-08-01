#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    int firstAthleteSeconds, secondAthleteSeconds, thirdAthleteSeconds;

    cin >> firstAthleteSeconds >> secondAthleteSeconds >> thirdAthleteSeconds;

    int totalSeconds = firstAthleteSeconds + secondAthleteSeconds + thirdAthleteSeconds;

    int minutes = totalSeconds / 60;
    int seconds = totalSeconds % 60;

    if (seconds < 10)
    {
        cout << minutes << ":0" << seconds << endl;
    }
    else 
    {
        cout << minutes << ":" << seconds << endl;
    }

    

    return 0;
}
