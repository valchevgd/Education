using System;

namespace P13_GameOfNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int m = int.Parse(Console.ReadLine());
            int magicalNum = int.Parse(Console.ReadLine());

            int counter = 0;

            for (int i = n; i <= m; i++)
            {
                for (int j = m; j >= n; j--)
                {

                    counter++;

                    if (i + j == magicalNum)
                    {
                        Console.WriteLine($"Number found! {j} + {i} = {magicalNum}");
                        return;
                    }
                }
            }

            Console.WriteLine($"{counter} combinations - neither equals {magicalNum}");
        }
    }
}
