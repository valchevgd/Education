using System;

namespace P03_Megapixels
{
    class Program
    {
        static void Main(string[] args)
        {
            int width = int.Parse(Console.ReadLine());
            int height = int.Parse(Console.ReadLine());

            double totalPixels = width * height * 1.0;
            double megaPixels = totalPixels / 1000000;

            Console.WriteLine($"{width}x{height} => {Math.Round(megaPixels,1)}MP");
        }
    }
}
