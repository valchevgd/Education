using System;

namespace P04_DrawAFilledSquare
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            PrintFirstAndLastRow(input);
            for (int i = 0; i < input - 2; i++)
            {
                PrintMiddleRows(input);
            }
            PrintFirstAndLastRow(input);

        }

        private static void PrintMiddleRows(int num)
        {
            Console.Write("-");

            for (int i = 1; i < num; i++)
            {
                Console.Write("\\/");
            }

            Console.WriteLine("-");
        }

        private static void PrintFirstAndLastRow(int num)
        {
            Console.WriteLine(new string('-', 2 * num) );
        }
    }
}
