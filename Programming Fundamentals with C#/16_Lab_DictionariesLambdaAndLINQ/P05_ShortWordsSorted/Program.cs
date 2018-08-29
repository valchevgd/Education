using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_ShortWordsSorted
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] separators = { '.', ',', ':', ';', '(', ')', '[', ']', '"', '\'', '\\', '/', '!', '?', ' '  };

            string[] words = Console.ReadLine()
                .ToLower()
                .Split(separators, StringSplitOptions.RemoveEmptyEntries)
                .ToArray();

            List<string> filtredWords = new List<string>();


            foreach (var word in words)
            {
                if (word.Length < 5)
                {
                    filtredWords.Add(word);
                }
            }
            
            Console.WriteLine(string.Join(", ", filtredWords.OrderBy(x => x).Distinct()));
        }
    }
}
