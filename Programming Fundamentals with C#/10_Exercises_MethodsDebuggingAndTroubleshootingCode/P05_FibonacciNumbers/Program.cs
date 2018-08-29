using System;

namespace P05_FibonacciNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            int number = int.Parse(Console.ReadLine());
            int fibNum = GetFibonacciNumber(number);
            Console.WriteLine(fibNum);
        }

        private static int GetFibonacciNumber(int number)
        {
            int fibZero = 0;
            int fibOne = 1;
            int fibNum = 0;

            if (number == 0)
            {
                fibNum = 1;
            }
            else
            {
                for (int num = 0; num < number; num++)
                {
                    fibNum = fibOne + fibZero;
                    fibZero = fibOne;
                    fibOne = fibNum;
                }
            }

            return fibNum;
        }
    }
}
