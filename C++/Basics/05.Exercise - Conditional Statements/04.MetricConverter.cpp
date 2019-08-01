#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    double input, output;
    string inputMetric, outputMetric;

    cin >> input >> inputMetric >> outputMetric;

    if (inputMetric == "mm")
    {
        if (outputMetric == "cm")
        {
            output = input / 10.0;
        }else
        {
            output = input / 1000.0;
        } 
    }
    else if (inputMetric == "cm")
    {
        if (outputMetric == "mm")
        {
            output = input * 10.0;
        }else
        {
            output = input / 100.0;
        } 
    }
    else
    {
        if (outputMetric == "mm")
        {
            output = input * 1000.0;
        }else
        {
            output = input * 100.0;
        } 
    }
    
    cout.setf(ios::fixed);
    cout.precision(3);

    cout << output << endl;
    
    return 0;
}
