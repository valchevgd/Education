using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.Linq;

namespace P03_StarEnigma
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            string pattern = @"[starSTAR]";
            Regex regex = new Regex(pattern);
            string planetPattern = 
                @"@(?<planetName>[A-Za-z]+)(?:[^@\-!:>]*)?:(?<population>[\d]*)(?:[^@\-!:>]*)?!(?<type>[AD])!(?:[^@\-!:>]*)?->(?<soldiers>[\d]*)";
            Regex planetRegex = new Regex(planetPattern);
            int attackedCounter = 0;
            int destroyedCounter = 0;
            List<string> attaked = new List<string>();
            List<string> destroyed = new List<string>();

            for (int i = 0; i < n; i++)
            {
                string message = Console.ReadLine();
                MatchCollection matches = regex.Matches(message);
                int decreecer = matches.Count;
                char[] temp = message.ToCharArray();
                string planet = "";

                for (int j = 0; j < temp.Length; j++)
                {
                    planet +=(char)(temp[j] - decreecer);
                }

                MatchCollection planetMatches = planetRegex.Matches(planet);

                foreach (Match item in planetMatches)
                {
                    string planetName = item.Groups["planetName"].Value;
                    string planetStatus = item.Groups["type"].Value;

                    if ("A" == planetStatus)
                    {
                        attackedCounter++;
                        attaked.Add(planetName);
                    }
                    else if ("D" == planetStatus)
                    {
                        destroyedCounter++;
                        destroyed.Add(planetName);
                    }
                }
            }

            Console.WriteLine($"Attacked planets: {attackedCounter}");
            foreach (var item in attaked.OrderBy(x => x))
            {
                Console.WriteLine($"-> {item}");
            }
            Console.WriteLine($"Destroyed planets: {destroyedCounter}");
            foreach (var item in destroyed.OrderBy(x => x))
            {
                Console.WriteLine($"-> {item}");
            }
        }
    }
}
