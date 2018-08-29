using System;

namespace P03_LastKNumbersSums
{
    class Program
    {
        static void Main(string[] args)
        {
            long n = long.Parse(Console.ReadLine());
            long k = long.Parse(Console.ReadLine());

            long[] sequence = new long[n];
            sequence[0] = 1;

            for (long i = 1; i < sequence.Length; i++)
            {
                long nextNum = 0;
                long j = i - k;

                if (j < 0)
                {
                    for (j = 0; j < i; j++)
                    {
                        nextNum += sequence[j];
                    }
                }
                else
                {
                    for (j = i - k; j < i; j++)
                    {
                        nextNum += sequence[j];
                    }
                }

                sequence[i] = nextNum;

            }

            Console.WriteLine(string.Join(" ", sequence));
        }
    }
}
