using System;

namespace P03_TextFilter
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] banWords = Console.ReadLine()
                .Split(", ".ToCharArray(), StringSplitOptions.RemoveEmptyEntries);
            string input = Console.ReadLine();


            foreach (var word in banWords)
            {
                if (input.Contains(word))
                {
                    input = input.Replace(word, new string('*', word.Length));
                }
            }

            Console.WriteLine(input);

        }
    }
}
