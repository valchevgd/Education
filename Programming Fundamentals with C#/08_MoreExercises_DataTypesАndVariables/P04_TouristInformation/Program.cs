using System;

namespace P04_TouristInformation
{
    class Program
    {
        static void Main(string[] args)
        {
            string imperialUnit = Console.ReadLine();
            double value = double.Parse(Console.ReadLine());

            double metricUnits = 0;
            string output = "";

            switch (imperialUnit)
            {
                case "miles":
                    metricUnits = value * 1.6;
                    output = "kilometers";
                    break;
                case "inches":
                    metricUnits = value * 2.54;
                    output = "centimeters";
                    break;
                case "feet":
                    metricUnits = value * 30;
                    output = "centimeters";
                    break;
                case "yards":
                    metricUnits = value * 0.91;
                    output = "meters";
                    break;
                case "gallons":
                    metricUnits = value * 3.8;
                    output = "liters";
                    break;
            }

            Console.WriteLine($"{value} {imperialUnit} = {metricUnits:f2} {output}");
        }
    }
}
