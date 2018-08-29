using System;

namespace P08_Center_Point
{
    class Program
    {
        static void Main(string[] args)
        {
            double x1 = double.Parse(Console.ReadLine());
            double y1 = double.Parse(Console.ReadLine());
            double x2 = double.Parse(Console.ReadLine());
            double y2 = double.Parse(Console.ReadLine());

            PrintingClosestPints(x1, y1, x2, y2);
        }

        private static void PrintingClosestPints(double x1, double y1, double x2, double y2)
        {
            double pointOne = CalculatePoint(x1, y1);
            double pointTwo = CalculatePoint(x2, y2);

            if (pointOne <= pointTwo)
            {
                Console.WriteLine($"({x1}, {y1})");
            }
            else
            {
                Console.WriteLine($"({x2}, {y2})");
            }
        }

        private static double CalculatePoint(double x, double y)
        {
            double reslut = (x * x + y * y);
            return reslut;
        }
    }
}
