#include <iostream>
#include <vector>

using namespace std;

int main() {

    vector <int> vector1 {};

    vector1.push_back(10);
    vector1.push_back(20);

    cout << "vector1" << endl << vector1.at(0) << endl << vector1.at(1) << endl;

    vector <int> vector2 {};

    vector2.push_back(100);
    vector2.push_back(200);

    cout << "vector2" << endl << vector2.at(0) << endl << vector2.at(1) << endl;

    vector <vector <int>> vector_2d {};

    vector_2d.push_back(vector1);
    vector_2d.push_back(vector2);

    cout << "vector2d" << endl << vector_2d[0][0] << endl << vector_2d.at(0).at(1) << endl;
    cout << vector_2d[1][0] << endl << vector_2d.at(1).at(1) << endl;

    vector1.at(0) = 1000;

    cout << "vector2d new" << endl << vector_2d.at(0).at(0) << endl << vector_2d.at(0).at(1) << endl;
    cout << vector_2d.at(1).at(0) << endl << vector_2d.at(1).at(1) << endl;

    cout << "vector1" << endl << vector1.at(0) << endl << vector1.at(1) << endl;

    return 0;
}