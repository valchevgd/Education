using System;
using System.Collections.Generic;

namespace P07_PrimesInGivenRange
{
    class Program
    {
        static void Main(string[] args)
        {
            int startNumber = int.Parse(Console.ReadLine());
            int endNumber = int.Parse(Console.ReadLine());

            string primeList = FindPrimeInRange(startNumber, endNumber);
                
            PrintListOfPrimes(primeList);
        }

        private static void PrintListOfPrimes(string primeList)
        {
            Console.WriteLine(primeList);
        }

        static string FindPrimeInRange(int startNumber, int endNumber)
        {
            int num = startNumber;
            string newPrimeList = "";

            while (num <= endNumber)
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

                        if (num % divisor == 0)
                        {
                            isPrime = false;
                            break;
                        }
                    }
                }

                if (isPrime)
                {
                    newPrimeList += num.ToString() + ", ";
                }

                num++;
            }

            newPrimeList = newPrimeList.Remove(newPrimeList.Length - 2, 2);
            return newPrimeList;
        }
    }
}
