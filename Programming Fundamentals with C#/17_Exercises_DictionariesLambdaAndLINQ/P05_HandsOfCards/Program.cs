using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_HandsOfCards
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, List<int>> plearResult = new Dictionary<string, List<int>>();

            while (true)
            {
                char[] separators = new char[] { '.', ',', ':', ';', '(', ')', '[', ']', '\\', '\"', '\'', '/', '!', '?', ' ' };

                List<string> input = Console.ReadLine()
                    .Split(separators, StringSplitOptions.RemoveEmptyEntries)
                    .Distinct()
                    .ToList();

                string player = input[0];

                if ("JOKER" == player)
                {
                    foreach (var name in plearResult)
                    {
                        Console.WriteLine(string.Join(": ", name.Key, name.Value.Sum()));
                    }
                    break;
                }

                List<int> sumOfCard = GetSumOfCard(input);
                if (plearResult.ContainsKey(player) == false)
                {
                    plearResult.Add(player, sumOfCard);
                }
                else
                {
                    plearResult[player].AddRange(sumOfCard);
                }
                

            }
        }

        static List<int> GetSumOfCard(List<string> arr)
        {
            List<int> newList = new List<int>();

            for (int i = 1; i < arr.Count; i++)
            {
                char[] nextCard = arr[i].ToCharArray();
                int firstSymbol = 0;
                int multiplayer = 0;

                if (nextCard.Length == 3)
                {
                    firstSymbol = 10;
                    char secondSymbol = nextCard[2];
                    switch (secondSymbol)
                    {
                        case 'C':
                            multiplayer = 1;
                            break;
                        case 'D':
                            multiplayer = 2;
                            break;
                        case 'H':
                            multiplayer = 3;
                            break;
                        case 'S':
                            multiplayer = 4;
                            break;
                    }
                }
                else if (nextCard[0] >= '1' && nextCard[0] <= '9')
                {
                    firstSymbol = (int)nextCard[0] - 48;
                    char secondSymbol = nextCard[1];
                    switch (secondSymbol)
                    {
                        case 'C':
                            multiplayer = 1;
                            break;
                        case 'D':
                            multiplayer = 2;
                            break;
                        case 'H':
                            multiplayer = 3;
                            break;
                        case 'S':
                            multiplayer = 4;
                            break;
                    }
                }
                else
                {
                    char otherSymbol = nextCard[0];
                    switch (otherSymbol)
                    {
                        case 'J':
                            firstSymbol = 11;
                            break;
                        case 'Q':
                            firstSymbol = 12;
                            break;
                        case 'K':
                            firstSymbol = 13;
                            break;
                        case 'A':
                            firstSymbol = 14;
                            break;
                    }
                    char secondSymbol = nextCard[1];
                    switch (secondSymbol)
                    {
                        case 'C':
                            multiplayer = 1;
                            break;
                        case 'D':
                            multiplayer = 2;
                            break;
                        case 'H':
                            multiplayer = 3;
                            break;
                        case 'S':
                            multiplayer = 4;
                            break;
                    }
                }


                newList.Add(firstSymbol * multiplayer);

            }


            return newList;
        }
    }
}
