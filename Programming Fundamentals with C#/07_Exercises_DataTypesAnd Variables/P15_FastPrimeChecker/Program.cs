using System;

namespace P15_FastPrimeChecker
{
    class Program
    {
        static void Main(string[] args)
        {
            int lastNum = int.Parse(Console.ReadLine());

            for (int num = 2; num <= lastNum; num++)
            {
                bool isPrime = true;

                for (int devisor = 2; devisor <= Math.Sqrt(num); devisor++)
                {
                    if (num % devisor == 0)
                    {
                        isPrime = false;
                        break;
                    }
                }
                Console.WriteLine($"{num} -> {isPrime}");
            }

        }
    }
}
