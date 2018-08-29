using System;

namespace P09_LongerLine
{
    class Program
    {
        static void Main(string[] args)
        {
            double x1 = double.Parse(Console.ReadLine());
            double y1 = double.Parse(Console.ReadLine());
            double x2 = double.Parse(Console.ReadLine());
            double y2 = double.Parse(Console.ReadLine());
            double x3 = double.Parse(Console.ReadLine());
            double y3 = double.Parse(Console.ReadLine());
            double x4 = double.Parse(Console.ReadLine());
            double y4 = double.Parse(Console.ReadLine());

            double firstLine = CalculateLane(x1, x2, y1, y2);
            double secondLine = CalculateLane(x3, x4, y3, y4);

            if (firstLine >= secondLine)
            {
                PrintingClosestPoints(x1, y1, x2, y2);
            }
            else
            {
                PrintingClosestPoints(x3, y3, x4, y4);
                
            }
        }

        private static void PrintingClosestPoints(double x1, double y1, double x2, double y2)
        {
            double pointOne = CalculatePoint(x1, y1);
            double pointTwo = CalculatePoint(x2, y2);

            if (pointOne <= pointTwo)
            {
                Console.WriteLine($"({x1}, {y1})({x2}, {y2})");
            }
            else
            {
                Console.WriteLine($"({x2}, {y2})({x1}, {y1})");
            }
        }

        private static double CalculatePoint(double x, double y)
        {
            double reslut = (x * x + y * y);
            return reslut;
        }

        private static double CalculateLane(double x1, double x2, double y1, double y2)
        {
            double startOfLine = Math.Pow(x2 - x1, 2);
            double endOfLine = Math.Pow(y2 - y1, 2);
            double result = CalculatePoint(startOfLine, endOfLine);
            return result;
        }
    }
}
