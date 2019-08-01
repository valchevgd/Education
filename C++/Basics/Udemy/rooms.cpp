#include <iostream>

using namespace std;

int main() {

    int number_of_small_rooms {0};
    cout << "How many small rooms: ";
    cin >> number_of_small_rooms;

    int number_of_large_rooms {0};
    cout << "How many large rooms: ";
    cin >> number_of_large_rooms;

    const double price_per_small_room {25.0};
    const double price_per_large_room {35.0};

    const double tax {0.06};
    
    double cost = (number_of_small_rooms * price_per_small_room) + (number_of_large_rooms * price_per_large_room);
    double taxes = cost * tax;

    double total_price = cost + taxes;

    cout << "Number of small rooms: " 
         << number_of_small_rooms 
         << endl; 

    cout << "Number of large rooms: " 
         << number_of_large_rooms 
         << endl;

    cout << "Price per small rooms: $" 
         << price_per_small_room 
         << endl;

    cout << "Price per large rooms: $" 
         << price_per_large_room 
         << endl;

    cout << "Cost: $" << cost << endl;
    cout << "Tax: $" << taxes << endl;

    for (int i = 0; i < 20; i++) {

        cout << "=";
    }

    cout << endl;

    cout << "Total: $" << total_price << endl;

    const int days_valid {30};

    cout << "This estimate is valid for " 
         << days_valid 
         << " days." << endl;

}