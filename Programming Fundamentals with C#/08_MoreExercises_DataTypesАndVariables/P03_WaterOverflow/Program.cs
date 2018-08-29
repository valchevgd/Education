using System;

namespace P03_WaterOverflow
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            int littersInTank = 0;
            for (int i = 0; i < num; i++)
            {
                int nextQuantities = int.Parse(Console.ReadLine());

                if (littersInTank + nextQuantities <= 255)
                {
                    littersInTank += nextQuantities;
                }
                else
                {
                    Console.WriteLine("Insufficient capacity!");
                }
            }

            Console.WriteLine(littersInTank);
        }
    }
}
