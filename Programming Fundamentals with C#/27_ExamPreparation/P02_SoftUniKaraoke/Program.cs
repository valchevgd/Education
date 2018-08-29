using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.RegularExpressions;

namespace P02_SoftUniKaraoke
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, List<string>> awards = new Dictionary<string, List<string>>();

            string participants = Console.ReadLine();
            string[] participantsList = Regex.Split(participants, @",\s+");
            string songs = Console.ReadLine();
            string[] songsList = Regex.Split(songs, @",\s+");
                

            string line = Console.ReadLine();

            while (line != "dawn")
            {
                string[] tokens = line
                    .Split(", ");

                string participant = tokens[0];
                string song = tokens[1];
                string award = tokens[2];

                if ((participantsList.Contains(participant) == false) 
                    || (songsList.Contains(song) == false))
                {
                    line = Console.ReadLine();
                    continue;
                }
                if (awards.ContainsKey(participant) == false)
                {
                    awards.Add(participant, new List<string>());
                    awards[participant].Add(award);
                }
                if (awards[participant].Contains(award) == false)
                {
                    awards[participant].Add(award);
                }

                line = Console.ReadLine();
            }

            if (awards.Values.Count == 0)
            {
                Console.WriteLine("No awards");
            }
            else
            {
                foreach (var winner in awards.OrderByDescending(x => x.Value.Count).ThenBy(x => x.Key))
                {
                    Console.WriteLine($"{winner.Key}: {winner.Value.Count} awards");
                    foreach (var award in winner.Value.OrderBy(x => x))
                    {
                        Console.WriteLine($"--{award}");
                    }
                }
            }
        }
    }
}
