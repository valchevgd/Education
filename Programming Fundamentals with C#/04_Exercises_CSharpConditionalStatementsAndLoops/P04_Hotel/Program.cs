using System;

namespace P04_Hotel
{
    class Program
    {
        static void Main(string[] args)
        {
            string month = Console.ReadLine();
            int nights = int.Parse(Console.ReadLine());

            double studioPrice = 0;
            double doublePrice = 0;
            double suitePrice = 0;

            switch (month)
            {
                case "May":
                    if (nights > 7)
                    {
                        studioPrice = nights * 50.0 * 0.95;
                        doublePrice = nights * 65.0;
                        suitePrice = nights * 75.0;
                    }
                    else
                    {
                        studioPrice = nights * 50.0;
                        doublePrice = nights * 65.0;
                        suitePrice = nights * 75.0;
                    }
                    break;
                case "October":
                    if (nights > 7)
                    {
                        studioPrice = (nights - 1)* 50.0 * 0.95;
                        doublePrice = nights * 65.0;
                        suitePrice = nights * 75.0;
                    }
                    else
                    {
                        studioPrice = nights * 50.0;
                        doublePrice = nights * 65.0;
                        suitePrice = nights * 75.0;
                    }
                    break;
                case "June":
                    if (nights > 14)
                    {
                        studioPrice = nights * 60.0 ;
                        doublePrice = nights * 72.0 * 0.9;
                        suitePrice = nights * 82.0;
                    }
                    else
                    {
                        studioPrice = nights * 60.0;
                        doublePrice = nights * 72.0;
                        suitePrice = nights * 82.0;
                    }
                    break;
                case "September":
                    if (nights > 7 && nights <= 14)
                    {
                        studioPrice = (nights - 1) * 60.0;
                        doublePrice = nights * 72.0;
                        suitePrice = nights * 82.0;
                    }
                    else if (nights > 14)
                    {
                        studioPrice = (nights - 1) * 60.0;
                        doublePrice = nights * 72.0 * 0.9;
                        suitePrice = nights * 82.0;
                    }
                    else
                    {
                        studioPrice = nights * 60.0;
                        doublePrice = nights * 72.0;
                        suitePrice = nights * 82.0;
                    }
                    break;
                case "July":
                case "August":
                case "December":
                    if (nights > 14)
                    {
                        studioPrice = nights * 68.0;
                        doublePrice = nights * 77.0;
                        suitePrice = nights * 89.0 * 0.85;
                    }
                    else
                    {
                        studioPrice = nights * 68.0;
                        doublePrice = nights * 77.0;
                        suitePrice = nights * 89.0;
                    }
                    break;

            }

            Console.WriteLine($"Studio: {studioPrice:f2} lv.");
            Console.WriteLine($"Double: {doublePrice:f2} lv.");
            Console.WriteLine($"Suite: {suitePrice:f2} lv.");
        }
    }
}
