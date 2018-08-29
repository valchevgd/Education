using System;

namespace P06_PrimeChecker
{
    class Program
    {
        static void Main(string[] args)
        {
            long num = long.Parse(Console.ReadLine());

            bool isPrime = IsPrime(num);

            Console.WriteLine(isPrime);
        }

        private static bool IsPrime(long num)
        {
            bool isPrime = true;

            if (num == 0 || num == 1)
            {
                isPrime = false;
            }
            else if (num > 1)
            {
                for (long divisor = 2; divisor <= Math.Sqrt(num); divisor++)
                {

                    if (num  % divisor == 0)
                    {
                        isPrime = false;
                        break;
                    }
                }
            }

            return isPrime;
        }
    }
}
