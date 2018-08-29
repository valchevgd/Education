using System;
using System.Numerics;

namespace P14_FactorialTrailingZeroes
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            BigInteger factoriel = GetFactoriel(input);
            int trailingZeros = GetTrailingZeros(factoriel);

            Console.WriteLine(trailingZeros);

        }

        private static int GetTrailingZeros(BigInteger num)
        {
            string number = num.ToString();
            char[] text = number.ToCharArray();
            int counter = 0;


            for (int i = text.Length - 1; i >= 0; i--)
            {
                if (number[i] == '0')
                {
                    counter++;
                }
                else
                {
                    break;
                }
            }

            

            return counter;
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
