using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_OddOccurrences
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, int> words = new Dictionary<string, int>();

            string[] input = Console.ReadLine()
                .ToLower()
                .Split()
                .ToArray();

            foreach (var word in input)
            {
                if (!words.ContainsKey(word))
                {
                    words.Add(word, 0);
                }

                words[word]++;
            }

            List<string> oddOccurrencesWord = new List<string>();

            foreach (var word in words)
            {
                if (word.Value % 2 != 0)
                {
                    oddOccurrencesWord.Add(word.Key);
                }
            }

            Console.WriteLine(string.Join(", ", oddOccurrencesWord));
        }
    }
}
