using System;

namespace P11_Convert_SpeedUnits
{
    class Program
    {
        static void Main(string[] args)
        {
            int distanceInMeters = int.Parse(Console.ReadLine());
            int hours = int.Parse(Console.ReadLine());
            int minutes = int.Parse(Console.ReadLine());
            int seconds = int.Parse(Console.ReadLine());

            double metersPerSecond = distanceInMeters / ((hours * 60.0 * 60.0) + (minutes * 60.0) + (seconds * 1.0));
            double kilometersPerHour = metersPerSecond * 3600 / 1000;
            double milesPerHours = kilometersPerHour / 1.609;

            Console.WriteLine($"{metersPerSecond:f6}");
            Console.WriteLine($"{kilometersPerHour:f6}");
            Console.WriteLine($"{milesPerHours:f6}");
            
        }
    }
}
