using System;

namespace P12_RectangleProperties
{
    class Program
    {
        static void Main(string[] args)
        {
            double width = double.Parse(Console.ReadLine());
            double height = double.Parse(Console.ReadLine());

            double perimetre = (width * 2) + (height * 2);
            double area = width * height;
            double diagonal = Math.Sqrt(Math.Pow(width, 2) + Math.Pow(height, 2));

            Console.WriteLine(perimetre);
            Console.WriteLine(area);
            Console.WriteLine(diagonal);
        }
    }
}
