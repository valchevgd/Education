using System;
using System.Text.RegularExpressions;

namespace P05_MatchNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))";
            Regex regex = new Regex(pattern);

            string input = Console.ReadLine();

            MatchCollection matches = regex.Matches(input);

            foreach (Match num in matches)
            {
                Console.Write(num.Value + " ");
            }

            Console.WriteLine();
        }
    }
}
