using System;

namespace P02_RectangleArea
{
    class Program
    {
        static void Main(string[] args)
        {
            double width = double.Parse(Console.ReadLine());
            double hight = double.Parse(Console.ReadLine());
            double area = width * hight;

            Console.WriteLine($"{area:F2}");
            

        }
    }
}
