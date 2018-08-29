using System;

namespace P04_SieveOfEratosthenes
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());

            bool[] prime = new bool[n + 1];

            for (int i = 2; i < prime.Length; i++)
            {
                prime[i] = true;
            }

            for (int i = 2; i < prime.Length; i++)
            {
                if (prime[i])
                {
                    Console.Write(i + " ");

                    for (int j = 2 * i; j < prime.Length; j += i)
                    {


                        prime[j] = false;


                    }
                }
            }
            Console.WriteLine();
        }
    }
}
