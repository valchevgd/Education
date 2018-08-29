using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_Palindromes
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine()
                .Split(".,!? ".ToCharArray(), StringSplitOptions.RemoveEmptyEntries);

            List<string> palindromes = new List<string>();

            foreach (var word in input)
            {
                string reversed = new string (word.Reverse().ToArray());

                if (word == reversed)
                {
                    palindromes.Add(word);
                }
            }

            List<string> sorted = palindromes
                .Distinct()
                .OrderBy(x => x)
                .ToList();

            Console.WriteLine(string.Join(", ", sorted));
        }
    }
}
