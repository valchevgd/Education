using System;

namespace P04_Elevator
{
    class Program
    {
        static void Main(string[] args)
        {
            int numberOfPeople = int.Parse(Console.ReadLine());
            double capacityOfElevator = double.Parse(Console.ReadLine());

            double courses = Math.Floor(numberOfPeople / capacityOfElevator);

            if (numberOfPeople % capacityOfElevator != 0)
            {
                courses++;
            }

            Console.WriteLine(courses);
        }
    }
}
