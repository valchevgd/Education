using System;
using System.Text.RegularExpressions;

namespace P02_ExtractSentencesByKeyword
{
    class Program
    {
        static void Main(string[] args)
        {
            string word = Console.ReadLine();
            string input = Console.ReadLine();

            string pattern = $@"\b[^.?!]+\b{word}\b.+?(?=[.?!])";
            Regex regex = new Regex(pattern);


            MatchCollection matches = regex.Matches(input);

            foreach (Match match in matches)
            {
                Console.WriteLine(match.Value);
            }
        }
    }
}
