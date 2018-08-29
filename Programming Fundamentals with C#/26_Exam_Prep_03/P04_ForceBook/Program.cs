using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.RegularExpressions;

namespace P04_ForceBook
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, List<string>> forceBook = new Dictionary<string, List<string>>();

            string line = Console.ReadLine();

            while (line != "Lumpawaroo")
            {
                Match match = Regex.Match(line, @"(?<firstString>.*) (?<delimer>\||->) (?<secondString>.*)");
                string delimer = match.Groups["delimer"].Value;

                string[] tokens = line
                    .Split();
                string forceUser = "";
                string forceSide = "";

                if (delimer == "->")
                {
                    forceUser = match.Groups["firstString"].Value;
                    forceSide = match.Groups["secondString"].Value;

                    Console.WriteLine($"{forceUser} joins the {forceSide} side!");

                    foreach (var side in forceBook)
                    {
                        if (side.Value.Contains(forceUser))
                        {
                            side.Value.Remove(forceUser);
                            break;
                        }
                    }

                    if (forceBook.ContainsKey(forceSide) == false)
                    {
                        forceBook.Add(forceSide, new List<string>());
                        forceBook[forceSide].Add(forceUser);
                    }
                    else
                    {
                        forceBook[forceSide].Add(forceUser);
                    }
                }
                else
                {
                    forceUser = match.Groups["secondString"].Value;
                    forceSide = match.Groups["firstString"].Value;

                    bool exist = false;

                    foreach (var side in forceBook)
                    {
                        if (side.Value.Contains(forceUser))
                        {
                            exist = true;
                            break;
                        }
                    }

                    if (exist)
                    {
                        line = Console.ReadLine();
                        continue;
                    }

                    if (forceBook.ContainsKey(forceSide) == false)
                    {
                        forceBook.Add(forceSide, new List<string>());
                        forceBook[forceSide].Add(forceUser);
                    }
                    else
                    {
                        forceBook[forceSide].Add(forceUser);
                    }
                }

                line = Console.ReadLine();
            }

            foreach (var side in forceBook.OrderByDescending(x => x.Value.Count).ThenBy(x => x.Key))
            {
                if (side.Value.Count == 0)
                {
                    continue;
                }
                Console.WriteLine($"Side: {side.Key}, Members: {side.Value.Count}");

                foreach (var user in side.Value.OrderBy(x => x))
                {
                    Console.WriteLine($"! {user}");
                }
            }
        }
    }
}
