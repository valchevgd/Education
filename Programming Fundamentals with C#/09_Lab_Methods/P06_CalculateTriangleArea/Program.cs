using System;

namespace P06_CalculateTriangleArea
{
    class Program
    {
        static void Main(string[] args)
        {
            double width = double.Parse(Console.ReadLine());
            double hight = double.Parse(Console.ReadLine());

            double area = GetTriangleArea(width, hight);

            Console.WriteLine(area);
        }

        private static double GetTriangleArea(double width, double hight)
        {
            return width * hight / 2;
        }
    }
}
