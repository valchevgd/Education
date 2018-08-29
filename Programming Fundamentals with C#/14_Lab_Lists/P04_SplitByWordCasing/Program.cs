using System;
using System.Collections.Generic;

namespace P04_SplitByWordCasing
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] spliters = { ',', ';', ':', '.', '!', '(', ')', '"', '\\', '\'', '/', '[', ']', ' ' };

            string[] input = Console.ReadLine()
                .Split(spliters);

            List<string> lowerCase = new List<string>();
            List<string> upperCase = new List<string>();
            List<string> mixed = new List<string>();

            for (int i = 0; i < input.Length; i++)
            {
                
                if (input[i] == input[i].ToLower())
                {
                    lowerCase.Add(input[i]);
                }
                else if (input[i] == input[i].ToUpper())
                {
                    upperCase.Add(input[i]);
                }
                else
                {
                    mixed.Add(input[i]);
                }
                
            }

            Console.Write("Lower-case: ");
            Console.WriteLine(string.Join(", ", lowerCase));

        }
    }
}
