using System;
using System.Linq;
using System.Text.RegularExpressions;

namespace P02_MatchPhoneNumber
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"\+359( |\-)2\1\d{3}\1\d{4}\b";
            Regex regex = new Regex(pattern);

            string input = Console.ReadLine();

            MatchCollection matched = regex.Matches(input);

            string[] matchedPhones = matched
                .Cast<Match>()
                .Select(p => p.Value.Trim())
                .ToArray();

            Console.WriteLine(string.Join(", ", matchedPhones));
        }
    }
}
