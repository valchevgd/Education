using System;
using System.Collections.Generic;
using System.Linq;

namespace P03_TseamAccount
{
    class Program
    {
        static void Main(string[] args)
        {
            List<string> gamesInAcc = Console.ReadLine()
                .Split()
                .ToList();

            string line = Console.ReadLine();

            while (line != "Play!")
            {
                string[] comands = line
                    .Split(' ','-');

                string comand = comands[0];
                string game = comands[1];

                if ("Install" == comand)
                {
                    if (gamesInAcc.Contains(game) == false)
                    {
                        gamesInAcc.Add(game);
                    }

                }
                else if ("Uninstall" == comand)
                {
                    if (gamesInAcc.Contains(game))
                    {
                        gamesInAcc.Remove(game);
                    }
                }
                else if ("Update" == comand)
                {
                    if (gamesInAcc.Contains(game))
                    {
                        gamesInAcc.Remove(game);
                        gamesInAcc.Add(game);
                    }
                }
                else if ("Expansion" == comand)
                {
                    string expansion = comands[2];
                    if (gamesInAcc.Contains(game))
                    {
                        gamesInAcc.Insert(gamesInAcc.IndexOf(game) + 1, game + ":" + expansion);
                    }
                }

                line = Console.ReadLine();
            }

            Console.WriteLine(string.Join(" ", gamesInAcc));
        }
    }
}
