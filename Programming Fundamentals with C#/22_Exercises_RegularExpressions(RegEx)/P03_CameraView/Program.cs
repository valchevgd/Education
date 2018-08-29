using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;

namespace P03_CameraView
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] skipTake = Console.ReadLine()
                .Split();
            int skip = int.Parse(skipTake[0]);
            int take = int.Parse(skipTake[1]);
            string input = Console.ReadLine();

            string pattern = $@"\|<.{{{skip}}}([^|]{{0,{take}}})";
            Regex regex = new Regex(pattern);

            MatchCollection matches = regex.Matches(input);

            List<string> views = new List<string>();

            foreach (Match match in matches)
            {
                views.Add(match.Groups[1].Value);
            }
            
            Console.WriteLine(string.Join(", ", views));
        }
    }
}
