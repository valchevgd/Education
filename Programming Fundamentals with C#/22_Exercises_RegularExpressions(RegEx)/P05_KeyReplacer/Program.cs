using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.Linq;

namespace P05_KeyReplacer
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"[^<\|\\]+";
            Regex regex = new Regex(pattern);

            string input = Console.ReadLine();

            MatchCollection keys = regex.Matches(input);

            string start = keys[0].ToString();
            string end = keys[keys.Count - 1].ToString();

            pattern = $@"({start})(.*?)({end})";
            string text = Console.ReadLine();

            regex = new Regex(pattern);
            MatchCollection matches = regex.Matches(text);

            List<string> output = new List<string>();

            foreach (Match match in matches)
            {
                output.Add(match.Groups[2].Value);
            }

            output.RemoveAll(x => x == "");

            if (output.Count == 0)
            {
                Console.WriteLine("Empty result");
            }
            else
            {
                Console.WriteLine(string.Join("", output));
            }
        }
    }
}
