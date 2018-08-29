using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_MOBAChallenger
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, Dictionary<string, int>> playersPool =
                new Dictionary<string, Dictionary<string, int>>();

            string input = Console.ReadLine();

            while (input != "Season end")
            {
                string[] tokens = input
                    .Split();

                if (tokens.Length == 5)
                {
                    string playerName = tokens[0];
                    string playerPosition = tokens[2];
                    int playerSkill = int.Parse(tokens[4]);

                    if (playersPool.ContainsKey(playerName) == false)
                    {
                        playersPool.Add(playerName, new Dictionary<string, int>());
                        playersPool[playerName].Add(playerPosition, playerSkill);
                    }
                    if (playersPool[playerName].ContainsKey(playerPosition) == false)
                    {
                        playersPool[playerName].Add(playerPosition, playerSkill);
                    }

                    int tempSkill = playersPool[playerName][playerPosition];

                    if (tempSkill < playerSkill)
                    {
                        playersPool[playerName][playerPosition] = tempSkill;
                    }
                }
                else
                {
                    string playerOne = tokens[0];
                    string playersTwo = tokens[2];
                    if (playersPool.ContainsKey(playerOne) == false || playersPool.ContainsKey(playersTwo) == false)
                    {
                        input = Console.ReadLine();
                        continue;
                    }
                    

                    bool haveCommon = false;

                    foreach (var position in playersPool[playerOne].Keys)
                    {
                        foreach (var pos in playersPool[playersTwo].Keys)
                        {
                            if (position == pos)
                            {
                                haveCommon = true;
                            }
                        }
                    }

                    if (haveCommon)
                    {
                        if (playersPool[playerOne].Values.Sum() > playersPool[playersTwo].Values.Sum())
                        {
                            playersPool.Remove(playersTwo);
                        }
                        else if (playersPool[playerOne].Values.Sum() < playersPool[playersTwo].Values.Sum())
                        {
                            playersPool.Remove(playerOne);
                        }
                    }
                }

                input = Console.ReadLine();
            }

            foreach (var player in playersPool.OrderByDescending(x => x.Value.Values.Sum()).ThenBy(x => x.Key))
            {
                string name = player.Key;
                int totalSkill = player.Value.Values.Sum();

                Console.WriteLine($"{name}: {totalSkill} skill");

                foreach (var positions in player.Value.OrderByDescending(x => x.Value).ThenBy(x => x.Key))
                {
                    string position = positions.Key;
                    int skill = positions.Value;

                    Console.WriteLine($"- {position} <::> {skill}");
                }
            }
        }
    }
}
