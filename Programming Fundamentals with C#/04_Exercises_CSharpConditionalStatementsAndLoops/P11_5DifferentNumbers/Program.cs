using System;

namespace P11_5DifferentNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int numOne = int.Parse(Console.ReadLine());
            int numTwo = int.Parse(Console.ReadLine());

            if (numTwo - numOne < 5)
            {
                Console.WriteLine("No");
            }
            else
            {
                for (int i = numOne; i <= numTwo - 4; i++)
                {
                    for (int j = i + 1; j <= numTwo - 3; j++)
                    {
                        for (int k = j + 1; k <= numTwo - 2; k++)
                        {
                            for (int l = k + 1; l <= numTwo - 1; l++)
                            {
                                for (int m = l + 1; m <= numTwo; m++)
                                {
                                    Console.WriteLine($"{i} {j} {k} {l} {m}");
                                }
                            }
                        }
                    }
                }
            }
        }

            
    }
}
