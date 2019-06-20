#include <iostream>
using namespace std;

int main()
{
    string figure;

    cin >> figure;

    double output;

    if (figure == "square")
    {
        double side;

        cin >> side;

        output = side * side;
    } else if (figure == "rectangle")
    {
        double width, height;

        cin >> width >> height;

        output = width * height;
    } else if (figure == "circle")
    {
        double radius;

        cin >> radius;

        output = 3.14159265359 * radius * radius;
    } else if (figure == "triangle")
    {
        double side, height;

        cin >> side >> height;

        output = side * height / 2;
    }
    
    cout.setf(ios::fixed);
    cout.precision(3);

    cout << output << endl;
    
    return 0;
}
