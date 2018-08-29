using System;

namespace P03_PrintingTriangle
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            PrintTriangle(input);
        }

        private static void PrintTriangle(int num)
        {
            PrintTopPart(num);
            PrintBottomPart(num);
        }

        private static void PrintBottomPart(int num)
        {
            for (int row = num - 1; row >= 1; row--)
            {
                for (int col = 1; col <= row; col++)
                {
                    Console.Write(col + " ");
                }
                Console.WriteLine();
            }
        }

        private static void PrintTopPart(int num)
        {
            for (int row = 1; row <= num; row++)
            {
                for (int col = 1; col <= row; col++)
                {
                    Console.Write(col + " ");
                }
                Console.WriteLine();
            }
        }
    }
}
