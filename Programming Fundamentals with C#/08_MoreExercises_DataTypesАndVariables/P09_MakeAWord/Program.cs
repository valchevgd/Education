using System;

namespace P09_MakeAWord
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            string word = "";

            for (int i = 0; i < num; i++)
            {
                char nextChar = char.Parse(Console.ReadLine());
                word += nextChar;
            }

            Console.WriteLine($"The word is: {word}");
        }
    }
}
