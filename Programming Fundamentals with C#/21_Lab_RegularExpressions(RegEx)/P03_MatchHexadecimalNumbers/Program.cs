using System;
using System.Linq;
using System.Text.RegularExpressions;

namespace P03_MatchHexadecimalNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"\b(0x)?([0-9A-F]+)\b";
            Regex regex = new Regex(pattern);

            string input = Console.ReadLine();

            MatchCollection matches = regex.Matches(input);

            string[] matched = matches
                .Cast<Match>()
                .Select(h => h.Value.Trim())
                .ToArray();

            Console.WriteLine(string.Join(" ", matched));
        }
    }
}
