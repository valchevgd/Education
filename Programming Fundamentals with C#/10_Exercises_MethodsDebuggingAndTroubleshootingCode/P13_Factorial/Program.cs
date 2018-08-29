using System;
using System.Numerics;

namespace P13_Factorial
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            BigInteger factoriel = GetFactoriel(input);

            Console.WriteLine(factoriel);

        }

        private static BigInteger GetFactoriel(int number)
        {
            BigInteger factoriel = 1;

            for (int num = 1; num <= number; num++)
            {
                factoriel *= num;
            }

            return factoriel;
        }
    }
}
