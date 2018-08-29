using System;

namespace P12_BeerKegs
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            string model = "";
            double volume = 0;

            for (int i = 0; i < num; i++)
            {
                string newModel = Console.ReadLine();
                double radius = double.Parse(Console.ReadLine());
                long height = long.Parse(Console.ReadLine());



                double newVolume = Math.PI * Math.Pow(radius, 2) * height;

                if (newVolume > volume)
                {
                    model = newModel;
                    volume = newVolume;
                }
               
            }

            Console.WriteLine(model);
        }
    }
}
