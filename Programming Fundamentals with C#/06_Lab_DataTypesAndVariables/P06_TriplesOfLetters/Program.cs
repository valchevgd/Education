using System;

namespace P06_TriplesOfLetters
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            for (char i = 'a'; i <= 'a' + num - 1; i++)
            {
                for (char j = 'a'; j <= 'a' + num - 1; j++)
                {
                    for (char k = 'a'; k <= 'a' + num - 1; k++)
                    {
                        Console.WriteLine($"{i}{j}{k}");
                    }
                }
            }
        }
    }
}
