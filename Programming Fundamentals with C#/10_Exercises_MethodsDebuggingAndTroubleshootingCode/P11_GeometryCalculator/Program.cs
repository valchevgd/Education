using System;

namespace P11_GeometryCalculator
{
    class Program
    {
        static void Main(string[] args)
        {
            string figureType = Console.ReadLine();
            double result = 0;

            if ("triangle" == figureType)
            {
                double side = double.Parse(Console.ReadLine());
                double hight = double.Parse(Console.ReadLine());
                result = GetAreaOfTriangle(side, hight);
            }
            else if ("square" == figureType)
            {
                double side = double.Parse(Console.ReadLine());
                result = GetAreaOfSquare(side);
            }
            else if ("rectangle" == figureType)
            {
                double width = double.Parse(Console.ReadLine());
                double hight = double.Parse(Console.ReadLine());
                result = GetAreaOfRectangle(width, hight);
            }
            else if ("circle" == figureType)
            {
                double radius = double.Parse(Console.ReadLine());
                result = GetAreaOfCircle(radius);
            }

            Console.WriteLine($"{result:f2}");
        }

        private static double GetAreaOfCircle(double radius)
        {
            double area = Math.PI * Math.Pow(radius, 2);
            return area;
        }

        private static double GetAreaOfRectangle(double width, double hight)
        {
            double area = width * hight;
            return area;
        }

        private static double GetAreaOfSquare(double side)
        {
            double area = side * side;
            return area;
        }

        private static double GetAreaOfTriangle(double side, double hight)
        {
            double area = (side * hight) / 2;
            return area;
        }
    }
}
