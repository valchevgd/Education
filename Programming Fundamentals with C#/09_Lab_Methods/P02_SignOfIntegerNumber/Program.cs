using System;

namespace P02_SignOfIntegerNumber
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            PrintSign(input);

        }

       private static void PrintSign(int num)
        {
            if (num < 0)
            {
                Console.WriteLine($"The number {num} is negative.");
            }
            else if (num == 0)
            {
                Console.WriteLine($"The number 0 is zero.");
            }
            else 
            {
                Console.WriteLine($"The number {num} is positive.");
            }
        }
    }
}
